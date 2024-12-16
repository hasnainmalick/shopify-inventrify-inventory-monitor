<?php

declare(strict_types=1);

namespace App\Lib\Handlers;

use Illuminate\Support\Facades\Log;
use Shopify\Webhooks\Handler;
use App\Models\Session;

class AppSubscribed implements Handler
{
    public function handle(string $topic, string $shop, array $body): void
    {
        $session =  Session::where('shop', $shop)->first();
        $session->paid = $body['app_subscription']['status'];    
        $session->save();
    }
}
