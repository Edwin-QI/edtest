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

mix.js('resources/js/app.js', 'public/js')
.js('resources/js/chart-area-demo.js', 'public/js')
.js('resources/js/chart-bar-demo.js', 'public/js')
.js('resources/js/chart-pie-demo.js', 'public/js')
.js('resources/js/datatables-demo.js', 'public/js')
.js('resources/js/datatables-simple-demo.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/_admin.scss', 'public/css');
