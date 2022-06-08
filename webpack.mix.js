const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
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

mix 
    .js('resources/js/app.js', 'public/js')
    .minify('public/js/app.js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .disableNotifications()
    .options({
        processCssUrls: true,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .browserSync({
        proxy: 'soniacervoni.test',
        host: 'soniacervoni.test',
        open: 'external',
        port: '8080',
        notify: false
    });
    
