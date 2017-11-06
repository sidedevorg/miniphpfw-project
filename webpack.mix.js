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
    .browserSync('0.0.0.0:8181')
    .version()
;