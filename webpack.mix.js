const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/stock/js/app.js')
    .sass('resources/sass/app.scss', 'public/stock/css/app.css');

mix.js( 'resources/js/common/jquery.js', 'public/stock/js/jquery.js').options({ processCssUrls: false });
mix.js( 'resources/js/common/inventory.js', 'public/stock/js/inventory.js').options({ processCssUrls: false });
