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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/bootstrap-theme.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/main.css',
], 'public/assets/css/styles.css');

mix.scripts([
    'resources/assets/js/google-map.js',
    'resources/assets/js/headroom.min.js',
    'resources/assets/js/jQuery.headroom.min.js',
    'resources/assets/js/template.js',
], 'public/assets/js/scripts.js');

mix.scripts([
    'resources/assets/js/html5shiv.js',
    'resources/assets/js/respond.min.js',
], 'public/assets/js/ie9.js');

mix.copyDirectory('resources/assets/images', 'public/assets/images');
mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');
