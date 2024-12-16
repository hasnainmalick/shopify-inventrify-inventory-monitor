<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shopify\Clients\Graphql;
use Shopify\Clients\Rest;
use App\Exports\InventoryExport;
use App\Models\Session;
use App\Models\Schedule;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel as ExcelWriter;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Artisan;
use App\Jobs\SendEmailJob;
use App\Mail\InventoryExportMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Mailgun\Mailgun;

class ExportController extends Controller
{
  public function export(Request $request){
      $session = $request->get('shopifySession');
      $time = $request['time'];
      $client = new Rest($session->getShop(), $session->getAccessToken());
      $session_id = Session::where('shop',$session->getShop())->value('id');

    // checks if email already exists
      $exist = Schedule::where('session_id', $session_id)->where('email', $request->email)->first();
      if(isset($exist)){
        return response()->json('Email is already taken!',500);
      }

      $time_zone = $client->get('shop',[],['fields' => 'iana_timezone'])->getDecodedBody();
      $timeZoneValue = $time_zone['shop']['iana_timezone'];
      $karachi_time = Carbon::now($timeZoneValue);
      \Log::info($session_id);
      $schedule = Schedule::create([
        'session_id'=> $session_id,
        'email'=> $request['email'],
        'time' => $time, 
        'time_zone' => $timeZoneValue,
      ]);
      
      return response('success'); 

    }

  public function scheduleData(Request $request)
    {   
        $session = $request->get('shopifySession');
        $session_id = Session::where('shop',$session->getShop())->value('id');
        $data = Schedule::where('session_id',$session_id)->get();

        return response($data); 
   }

   public function delete(Request $request){
    $schedule = Schedule::find($request['id']);
    $schedule->delete();
    return response('ok');
  }

    protected function downloadExcel($export, $fileName)
    {
      
    
      $headers = [
        'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    ];

    return Excel::download($export, $fileName, ExcelWriter::XLSX, $headers); // Specify XLSX as the file type
   }

   public function status(Request $request){
    $schedule = Schedule::find($request['id']);
    $schedule->status = $request['status'];
    $schedule->save();
    return response()->json('',200);
   }


}
