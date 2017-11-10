# miniphpfw-project

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/sidedevorg/miniphpfw-project/blob/master/LICENSE)
[![Build Status](https://travis-ci.org/sidedevorg/miniphpfw-project.svg?branch=master)](https://travis-ci.org/sidedevorg/miniphpfw-project)

This is a template to initialize one project with [sidedevorg/miniphpfw](https://github.com/sidedevorg/miniphpfw), is a simple example for rapid prototype, you can modify file structure as you want.

## Requirements

- PHP >= 7
- [Composer](https://getcomposer.org/)
- [Npm](https://www.npmjs.com/)

## Instalation

- Download master branch of this repo.
- Run composer install
- Run npm install
- Copy .env.example to .env

## Config

File paths and some configuration can be modified on *"public/index.php"* file.

```
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
```

Routes can be configured on *"app/config/routes.php"* file.

## Run

With default configuration, run on root folder:

```
php -S 0.0.0.0:8181 -t public
```

PHP Development Server listening on [http://0.0.0.0:8181](http://0.0.0.0:8181).

For *js/css* development this template use [Laravel Mix](https://github.com/JeffreyWay/laravel-mix), a [Webpack](https://webpack.js.org/) wrapper, and
for test your project on diferents devices use [Browsersync](https://www.browsersync.io/).

Without kill PHP Development Server, run:

```
npm run watch
```

Result:

```
DONE  Compiled successfully in 852ms

   Asset       Size  Chunks             Chunk Names
 /app.js    2.83 kB       0  [emitted]  /app
/app.css  126 bytes       0  [emitted]  /app
[Browsersync] Proxying: http://0.0.0.0:8181
[Browsersync] Access URLs:
 --------------------------------------
       Local: http://localhost:3000
    External: http://192.168.3.110:3000
 --------------------------------------
          UI: http://localhost:3001
 UI External: http://192.168.3.110:3001
 --------------------------------------
[Browsersync] Watching files...
```

Browsersync is running on [http://localhost:3000](http://localhost:3000).

## Test

For testing propouse this repo use [Codeception PHP Testing Framework](http://codeception.com/).
Without kill PHP Development Server run:

```
vendor/bin/codecept run
```

Result:

```
Codeception PHP Testing Framework v2.3.6
Powered by PHPUnit 6.4.3 by Sebastian Bergmann and contributors.

Acceptance Tests (2) ----------------------------------------------------------------------------------
✔ AppCest: Home test (0.17s)
✔ AppCest: Not found test (0.09s)
-------------------------------------------------------------------------------------------------------

Functional Tests (0) ----------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------

Unit Tests (0) ----------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------


Time: 562 ms, Memory: 12.00MB

OK (2 tests, 2 assertions)
```

## How use miniphpfw

For more detail how framework can be used see [sidedevorg/miniphpfw](https://github.com/sidedevorg/miniphpfw) repo.

## Licence

Code released under the [MIT license](https://github.com/sidedevorg/miniphpfw-project/blob/master/LICENSE).

