const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.

    sass('resources/scss/bootstrap.scss', 'public/assets/css/bootstrap.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/assets/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/assets/js/bootstrap.bundle.js')

    .styles('resources/css/admin.css', 'public/assets/css/admin.css')
    .scripts('resources/js/admin.js', 'public/assets/js/admin.js')
