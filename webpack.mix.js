const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css');
mix.css('resources/css/login.css', 'public/css/app.css');
mix.css('resources/css/register.css', 'public/css/app.css');
