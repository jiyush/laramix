let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
	'public/js/jquery.js',
	'public/js/bootstrap.js',
	'public/js/laramix.js'
	],'public/js/all.js');

mix.styles([
	'public/css/bootstrap.css',
	'public/css/style.css'
	],'public/css/all.css');


