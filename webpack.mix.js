let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .copyDirectory('resources/lib', 'public/lib')
    .copyDirectory('resources/img', 'public/img')
    .copyDirectory('resources/mail', 'public/mail')
    .css('resources/css/style.css', 'public/css')
;
