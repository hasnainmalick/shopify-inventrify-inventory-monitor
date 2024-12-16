<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InventoryExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection

    */
    public function __construct($data)
    {
        $this->data = $data;
    }


    public function collection()
    {
        $formattedData = collect([]);
    
    foreach ($this->data['data'] as $item) {
        $handle = $item['Handle'];
        $title = $item['Title'];
        $sku = $item['SKU'];
        $locations = $item['Locations'];

        foreach ($locations as $location => $locationData) {
            $formattedRow = [
                'Handle' => $handle,
                'Title' => $title,
                'SKU' => $sku,
                'Location' => $location,
                'Available' => is_numeric($locationData['available']) && $locationData['available'] != 0 ? $locationData['available'] : '0',
                'Committed' => is_numeric($locationData['committed']) && $locationData['committed'] != 0 ? $locationData['committed'] : '0',
                'On Hand' => is_numeric($locationData['on_hand']) && $locationData['on_hand'] != 0 ? $locationData['on_hand'] : '0',
                'Incoming' => is_numeric($locationData['incoming']) && $locationData['incoming'] != 0 ? $locationData['incoming'] : '0',
            ];

            $formattedData->push($formattedRow);
        }
    }

    return $formattedData;
    }

    public function headings(): array
    {
        return [
            'Handle',
            'Title',
            'SKU',
            'Location',
            'Available',
            'Committed',
            'On Hand',
            'Incoming',
        ];
    }

}
