<?php

// ==================================================================
//  Composer autoload
// ------------------------------------------------------------------

require '../vendor/autoload.php';

// ==================================================================
//  Bootstrap
// ------------------------------------------------------------------

$response = (new SideDevOrg\MiniPhpFw\Bootstrap())->load(
    [
        'lang' => 'en',
        'paths' => [
            'database' => '../app/config/database.php',
            'middlewares' => '../app/config/middlewares.php',
            'routes' => '../app/config/routes.php',
            'env' => '../',
            'view' => '../app/views',
            'i18n' => '../app/langs',
            'routesCache' => '../app/storage',
            'assets_manifest' => 'static/build/mix-manifest.json',
        ],
        'config' => [
            'not_found_controller' => '\App\Controllers\ErrorsController::not_found',
        ]
    ]
)->getResponse();

// ==================================================================
//  Emit response
// ------------------------------------------------------------------

(new \Zend\Diactoros\Response\SapiEmitter())->emit($response);
