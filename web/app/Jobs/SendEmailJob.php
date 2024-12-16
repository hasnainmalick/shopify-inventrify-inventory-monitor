<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use App\Models\Session;
use Shopify\Utils;
use Shopify\Clients\Graphql;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\InventoryExportMail;
use App\Exports\InventoryExport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $schedule;

    public function __construct($schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Log::info('start job success at');
        $schedule = $this->schedule;
        \Log::info('schedule data from job');
        \Log::info($schedule->session_id);
        $shop = Session::where('id', $schedule->session_id)->value('shop');

        $session = \Shopify\Utils::loadOfflineSession($shop);
        $client = new Graphql($session->getShop(), $session->getAccessToken());

        $numVariants = 50; 
        $allVariants = [];
        $cursor = null; 
        
        $variantsQuery = <<<QUERY
          query getProductVariants(\$numVariants: Int!, \$cursor: String) {
            productVariants(first: \$numVariants, after: \$cursor) {
              nodes {
                id
                sku
                title
                product {
                  title
                  handle
                  id
                }
                inventoryItem {
                  id
                  inventoryLevels(first: 4) {
                    edges {
                      node {
                        id
                        quantities(names: ["committed","on_hand","incoming","available"]) {
                          name
                          quantity
                        }
                        location {
                          name
                        }
                      }
                    }
                  }
                }
              }
              pageInfo {
                hasNextPage
                endCursor
              }
            }
          }
        QUERY;
  
        $convertedArray = [];
        
        do {
            $variants_data = $client->query([
                'query' => $variantsQuery,
                'variables' => [
                    'numVariants' => $numVariants,
                    'cursor' => $cursor,
                ],
            ])->getDecodedBody();
        
            if (isset($variants_data['errors'])) {
                \Log::info($variants_data['errors']);
                break;
            }
            if (isset($variants_data['data']['productVariants']['nodes'])) {
              // \Log::info($variants_data);
              $nodes = $variants_data['data']['productVariants']['nodes'];
              // Extract the relevant data
              foreach($nodes as $node){
               
                $productId = $node['product']['id'];
                $variantId = $node['id'];
                // Yahan se product hatao we need variant title
                $title = $node['title'];
                $handle = $node['product']['handle'];
                $sku = $node['sku'];
        
                // Initialize available,incoming,on hand quantities for each location
                $locations = [];
  
                foreach ($node['inventoryItem']['inventoryLevels']['edges'] as $inventoryLevel) {
                    if (isset($inventoryLevel['node']['quantities'])) {
                        $locationName = $inventoryLevel['node']['location']['name'];
                
                        foreach ($inventoryLevel['node']['quantities'] as $quantity) {
                            $quantityName = $quantity['name'];
                            $quantityValue = $quantity['quantity'];
                
                            // Check if the location exists in the $locations array
                            if (!isset($locations[$locationName])) {
                                $locations[$locationName] = []; // Initialize the location array if it doesn't exist
                            }
                
                            // Store the quantity value under the location and quantity type
                            $locations[$locationName][$quantityName] = $quantityValue;
                        }
                    }
                }
                
               
                
        
                // Build the new structure for each product variant
                $convertedArray[] = [
                    'Handle' => $handle,
                    'Title' => $title,
                    'SKU' => $sku,
                    'Locations' => $locations
                ];
  
              }
    
  
                $allVariants = array_merge($allVariants, $variants_data['data']['productVariants']['nodes']);
            }
        
            if (isset($variants_data['data']['productVariants']['pageInfo'])) {
                if ($variants_data['data']['productVariants']['pageInfo']['hasNextPage']) {
                    $cursor = $variants_data['data']['productVariants']['pageInfo']['endCursor'];
                } else {
                    break;
                }
            } else {
                break;
            }
        
        } while ($cursor !== null);
  
      $finalArray = ['data' => $convertedArray];
      $time_now = Carbon::now($schedule->time_zone)->format('Y-m-d-H-i');
      $parts = explode('.', $shop);
      $substring = $parts[0];
      $fileName = $substring.'-' .$time_now. '.xlsx';
      $filePath =  Excel::store(new InventoryExport($finalArray), $fileName,'InventoryFiles'); 
    // $file =  Storage::disk('InventoryFiles')->put('inventory_export3.xlsx', $export);
    
    Mail::to($schedule->email)->send(new InventoryExportMail($fileName));
    // \Log::info('This is file name :: ', fileName);
   if (Mail::failures() != 0) { 
      \Log::info('mail sent');
      $path = public_path() . '/InventoryFiles/' . $fileName;
        if (File::exists($path)) {
            File::delete($path);
        }
      }
    }
}
