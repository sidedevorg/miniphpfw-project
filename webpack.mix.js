let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 */

mix.js('app/js/app.js', 'public/static/build')
    .sass('app/styles/app.scss', 'public/static/build')
    .setPublicPath('public/static/build')
    .version()
;