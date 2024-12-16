<?php

namespace App\Providers;

use App\Lib\DbSessionStorage;
use App\Lib\Handlers\AppUninstalled;
use App\Lib\Handlers\AppSubscribed;
use App\Lib\Handlers\Gdpr\CustomersDataRequest;
use App\Lib\Handlers\Gdpr\CustomersRedact;
use App\Lib\Handlers\Gdpr\ShopRedact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Shopify\Context;
use Shopify\ApiVersion;
use Shopify\Webhooks\Registry;
use Shopify\Webhooks\Topics;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     * @throws \Shopify\Exception\MissingArgumentException
     */
    public function boot()
    {
        $host = str_replace('https://', '', env('HOST', 'not_defined'));

        $customDomain = env('SHOP_CUSTOM_DOMAIN', null);
        Context::initialize(
            env('SHOPIFY_API_KEY', '33bfdb7de537a3d003b0ad25dc49ce0e'),
            env('SHOPIFY_API_SECRET', '7a482d09d51bd675b7dc1dbc3dd00c56'),
            env('SCOPES', 'read_inventory,write_inventory,read_products,write_products'),
            $host,
            new DbSessionStorage(),
            ApiVersion::LATEST,
            true,
            false,
            null,
            '',
            null,
            (array)$customDomain,
        );

        URL::forceRootUrl("https://$host");
        URL::forceScheme('https');

        Registry::addHandler(Topics::APP_UNINSTALLED, new AppUninstalled());
        Registry::addHandler(Topics::APP_SUBSCRIPTIONS_UPDATE , new AppSubscribed());

        /*
         * This sets up the mandatory GDPR webhooks. You’ll need to fill in the endpoint to be used by your app in the
         * “GDPR mandatory webhooks” section in the “App setup” tab, and customize the code when you store customer data
         * in the handlers being registered below.
         *
         * More details can be found on shopify.dev:
         * https://shopify.dev/docs/apps/webhooks/configuration/mandatory-webhooks
         *
         * Note that you'll only receive these webhooks if your app has the relevant scopes as detailed in the docs.
         */
        Registry::addHandler('CUSTOMERS_DATA_REQUEST', new CustomersDataRequest());
        Registry::addHandler('CUSTOMERS_REDACT', new CustomersRedact());
        Registry::addHandler('SHOP_REDACT', new ShopRedact());
    }
}
