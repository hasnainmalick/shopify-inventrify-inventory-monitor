<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InventoryExportMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function build()
    {
        \Log::info('here');
        $filePath = public_path('InventoryFiles/' . $this->fileName);
        \Log::info('file path' .   $filePath);
            if (file_exists($filePath)) {
                \Log::info('emails.inventory_export');
                return $this->view('emails.inventory_export')
                    ->attach($filePath, [
                        'as' => $this->fileName,
                    ])
                    ->subject('Inventory Export');
            } else {
               \Log::info('file does not exists');
            }

    }
}
