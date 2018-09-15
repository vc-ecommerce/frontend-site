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

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix.copyDirectory('resources/themes/dilan/assets/css', 'public/assets/v1/css');
mix.copyDirectory('resources/themes/dilan/assets/img', 'public/assets/v1/img');
mix.copyDirectory('resources/themes/dilan/assets/js', 'public/assets/v1/js');
mix.copyDirectory('resources/themes/dilan/assets/fonts', 'public/assets/v1/fonts');