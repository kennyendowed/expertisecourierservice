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
mix.styles([

    'public/lib/vendor/bootstrap/css/bootstrap.min.css',
    'public/lib/css/business-frontpage.css',
    'public/lib/font-awesome-4.7.0/css/font-awesome.min.css',
    'public/lib/css/style.css'
    ],
     'public/css/all.css');
mix.scripts([
    'public/lib/vendor/jquery/jquery.min.js',
   'public/lib/vendor/bootstrap/js/bootstrap.bundle.min.js'
], 'public/js/all.js');
