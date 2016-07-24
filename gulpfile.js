var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.styles(['bootstrap.css'], 'public/css/public.css');
	
	mix.scripts(['jquery223.js', 'bootstrap.js'], 'public/js/public.js');

   	mix.version(['css/public.css', 'js/public.js']);
});
