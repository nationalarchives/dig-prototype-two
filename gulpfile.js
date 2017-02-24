const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/', 'public/fonts/');
    mix.copy('resources/assets/js/lib/modernizr-development-build.js', 'public/dist/modernizr-development-build.js');
    mix.copy('resources/assets/js/lib/respond.js', 'public/dist/respond.js');
    mix.webpack('app.js');
});