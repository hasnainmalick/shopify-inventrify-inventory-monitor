<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L09NoijDsRqFX2fQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::41VpprTbRIdPqMul',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/check-billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkBilling',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a1Jxy57IYzIzjY6O',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MSx0vcGIn8B8GRaC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TlSfLlx2MNon9MOI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wKcobtlsVwKI6fg0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/webhooks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WrUyWnGTH49dtgUl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::22670C2VUt1ykBuQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/scheduleData' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yqlrKXSk2ZPAdCYF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vIuvKjJoVZliAueH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BE8HxQjV0rF3Tb7l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/(.*)(*:12))/?$}sDu',
    ),
    3 => 
    array (
      12 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0YBUYyG6O7PYT0Bm',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::L09NoijDsRqFX2fQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:259:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {
    return "Hello API";
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006010000000000000000";}";s:4:"hash";s:44:"DHu2Qr3d1caFGj4T7RdNH+u+EVII/gDe4iVQaEr9Kac=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::L09NoijDsRqFX2fQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::41VpprTbRIdPqMul' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:260:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:42:"function () {
    
   \\dd("Working");
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006040000000000000000";}";s:4:"hash";s:44:"E7Cg1E0CRNmyoVqFvgRp77CqzAfWODEMv4fV/ejIn+w=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::41VpprTbRIdPqMul',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0YBUYyG6O7PYT0Bm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shopify.installed',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:722:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:503:"function (\\Illuminate\\Http\\Request $request) {
    if (\\Shopify\\Context::$IS_EMBEDDED_APP &&  $request->query("embedded", false) === "1") {
        if (\\env(\'APP_ENV\') === \'production\') {
            return \\file_get_contents(\\public_path(\'index.html\'));
        } else {
            return \\file_get_contents(\\base_path(\'frontend/index.html\'));
        }
    } else {
        return \\redirect(\\Shopify\\Utils::getEmbeddedAppUrl($request->query("host", null)) . "/" . $request->path());
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006060000000000000000";}";s:4:"hash";s:44:"tqzZ4Cq5h/xHmuqOj6E2v7shxHJTGRv+lNoQPuQzWyU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0YBUYyG6O7PYT0Bm',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkBilling' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/check-billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:840:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:621:"function (\\Illuminate\\Http\\Request $request) {
    $shop = $request->query(\'shop\');
    $status = \\App\\Models\\Session::where(\'shop\',$shop)->value(\'paid\');
       if($status!==\'ACTIVE\' && $shop!==null){
           \\Log::info(\'if\');
           $session = \\Shopify\\Utils::loadOfflineSession($shop);
           $confirmationUrl = \\App\\Lib\\EnsureBilling::check($session, \\Illuminate\\Support\\Facades\\Config::get(\'shopify.billing\'));
           \\Log::info($confirmationUrl);
           return \\Response::json([\'confirmationUrl\' => $confirmationUrl[1]]);  
       }
       else{
           return null;
       }   
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006080000000000000000";}";s:4:"hash";s:44:"dD99yGkT7z0F1x8k0fYP/VHUDBfITM0V8GYnWZYR85k=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkBilling',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a1Jxy57IYzIzjY6O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:597:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:378:"function (\\Illuminate\\Http\\Request $request) {
    $shop = \\Shopify\\Utils::sanitizeShopDomain($request->query(\'shop\'));

    // Delete any previously created OAuth sessions that were not completed (don\'t have an access token)
    \\App\\Models\\Session::where(\'shop\', $shop)->where(\'access_token\', null)->delete();

    return \\App\\Lib\\AuthRedirection::redirect($request);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000060a0000000000000000";}";s:4:"hash";s:44:"MynWwf2fo4Q3EN6WQmfjAaGQbVSmKnDfvvHfGhuTqs4=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::a1Jxy57IYzIzjY6O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MSx0vcGIn8B8GRaC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:2072:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1852:"function (\\Illuminate\\Http\\Request $request) {
    $session = \\Shopify\\Auth\\OAuth::callback(
        $request->cookie(),
        $request->query(),
        [\'App\\Lib\\CookieHandler\', \'saveShopifyCookie\'],
    );

    $host = $request->query(\'host\');
    $shop = \\Shopify\\Utils::sanitizeShopDomain($request->query(\'shop\'));

    $response = \\Shopify\\Webhooks\\Registry::register(\'/api/webhooks\', \\Shopify\\Webhooks\\Topics::APP_UNINSTALLED, $shop, $session->getAccessToken());
    if ($response->isSuccess()) {
        \\Illuminate\\Support\\Facades\\Log::debug("Registered APP_UNINSTALLED webhook for shop $shop");
    } else {
        \\Illuminate\\Support\\Facades\\Log::error(
            "Failed to register APP_UNINSTALLED webhook for shop $shop with response body: " .
                \\print_r($response->getBody(), true)
        );
    }

    $app_subscription = \\Shopify\\Webhooks\\Registry::register(\'/api/webhooks\', \\Shopify\\Webhooks\\Topics::APP_SUBSCRIPTIONS_UPDATE , $shop, $session->getAccessToken());
    if ($app_subscription->isSuccess()) {
        \\Illuminate\\Support\\Facades\\Log::debug("Registered APP_SUBSCRIPTION_UPDATE  webhook for shop $shop");
    } else {
        \\Illuminate\\Support\\Facades\\Log::error(
            "Failed to register APP_SUBSCRIPTION_UPDATE  webhook for shop $shop with response body: " .
                \\print_r($app_subscription->getBody(), true)
        );
    }

    $redirectUrl = \\Shopify\\Utils::getEmbeddedAppUrl($host);
    if (\\Illuminate\\Support\\Facades\\Config::get(\'shopify.billing.required\')) {
        list($hasPayment, $confirmationUrl) = \\App\\Lib\\EnsureBilling::check($session, \\Illuminate\\Support\\Facades\\Config::get(\'shopify.billing\'));

        if (!$hasPayment) {
            $redirectUrl = $confirmationUrl;
        }
    }

    return \\redirect($redirectUrl);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000060c0000000000000000";}";s:4:"hash";s:44:"ITvcLkszz03YcfrGc22uAYaW3wOSRkhCTb191DbPeK8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MSx0vcGIn8B8GRaC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TlSfLlx2MNon9MOI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shopify.auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:606:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:387:"function (\\Illuminate\\Http\\Request $request) {
    /** @var AuthSession */
    $session = $request->get(\'shopifySession\'); // Provided by the shopify.auth middleware, guaranteed to be active

    $client = new \\Shopify\\Clients\\Rest($session->getShop(), $session->getAccessToken());
    $result = $client->get(\'products/count\');

    return \\response($result->getDecodedBody());
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000060e0000000000000000";}";s:4:"hash";s:44:"Luc5X8Au9z7AcQsRbGoD6SzF+jsPTJOPV7rAbCf09kU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TlSfLlx2MNon9MOI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wKcobtlsVwKI6fg0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shopify.auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1243:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1023:"function (\\Illuminate\\Http\\Request $request) {
    /** @var AuthSession */
    $session = $request->get(\'shopifySession\'); // Provided by the shopify.auth middleware, guaranteed to be active

    $success = $code = $error = null;
    try {
        \\App\\Lib\\ProductCreator::call($session, 5);
        $success = true;
        $code = 200;
        $error = null;
    } catch (\\Exception $e) {
        $success = false;

        if ($e instanceof \\App\\Exceptions\\ShopifyProductCreatorException) {
            $code = $e->response->getStatusCode();
            $error = $e->response->getDecodedBody();
            if (\\array_key_exists("errors", $error)) {
                $error = $error["errors"];
            }
        } else {
            $code = 500;
            $error = $e->getMessage();
        }

        \\Illuminate\\Support\\Facades\\Log::error("Failed to create products: $error");
    } finally {
        return \\response()->json(["success" => $success, "error" => $error], $code);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006100000000000000000";}";s:4:"hash";s:44:"J3mRRs9utmPAh1Deqo6zdQ2Y2qyN1zxxyssbMXOGMNo=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wKcobtlsVwKI6fg0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WrUyWnGTH49dtgUl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/webhooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1289:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1069:"function (\\Illuminate\\Http\\Request $request) {
    try {
        $topic = $request->header(\\Shopify\\Clients\\HttpHeaders::X_SHOPIFY_TOPIC, \'\');

        $response = \\Shopify\\Webhooks\\Registry::process($request->header(), $request->getContent());
        if (!$response->isSuccess()) {
            \\Illuminate\\Support\\Facades\\Log::error("Failed to process \'$topic\' webhook: {$response->getErrorMessage()}");
            return \\response()->json([\'message\' => "Failed to process \'$topic\' webhook"], 500);
        }
    } catch (\\Shopify\\Exception\\InvalidWebhookException $e) {
        \\Illuminate\\Support\\Facades\\Log::error("Got invalid webhook request for topic \'$topic\': {$e->getMessage()}");
        return \\response()->json([\'message\' => "Got invalid webhook request for topic \'$topic\'"], 401);
    } catch (\\Exception $e) {
    \\Illuminate\\Support\\Facades\\Log::error("Got an exception when handling \'$topic\' webhook: {$e->getMessage()}");
        return \\response()->json([\'message\' => "Got an exception when handling \'$topic\' webhook"], 500);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006120000000000000000";}";s:4:"hash";s:44:"AcJoFfxGg8zchaj0QBoGiLmCRvmIF+mZVAor0DtUewg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WrUyWnGTH49dtgUl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::22670C2VUt1ykBuQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shopify.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExportController@export',
        'controller' => 'App\\Http\\Controllers\\ExportController@export',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::22670C2VUt1ykBuQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yqlrKXSk2ZPAdCYF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/scheduleData',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shopify.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExportController@scheduleData',
        'controller' => 'App\\Http\\Controllers\\ExportController@scheduleData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yqlrKXSk2ZPAdCYF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vIuvKjJoVZliAueH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shopify.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExportController@delete',
        'controller' => 'App\\Http\\Controllers\\ExportController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vIuvKjJoVZliAueH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BE8HxQjV0rF3Tb7l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shopify.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExportController@status',
        'controller' => 'App\\Http\\Controllers\\ExportController@status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BE8HxQjV0rF3Tb7l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
