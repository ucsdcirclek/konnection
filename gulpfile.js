var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  mix.sass('main.scss')
    .scripts([
      'app-constants.js',
      'misc-config.js',
      'cerf.js',
      'popup-config.js',
      'user-search.js',
      'slideshow.js',
      //'modal.js',
      '*.js'
    ], 'public/js/main.js')
    .version(['css/main.css', 'js/main.js']);
});
