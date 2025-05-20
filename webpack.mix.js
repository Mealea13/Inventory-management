const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css');
mix.css('resources/css/admin/login.css', 'public/css/login.css');
mix.css('resources/css/admin/register.css', 'public/css/register.css');
mix.css('resources/css/admin/dashboard.css', 'public/css/dashboard.css');
mix.css('resources/css/admin/sidebar.css', 'public/css/sidebar.css');
