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
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/joinLesson.js', 'public/js');
mix.js('resources/js/updateWord.js', 'public/js');
mix.js('resources/js/editMember.js', 'public/js');
mix.js('resources/js/editLesson.js', 'public/js');
