let mix =require('laravel-mix');

mix.js('resources/js/app.js', 'js')
    .postCss('resources/css/app.css', 'css', [
        require('tailwindcss'),
    ])
    .js('node_modules/swiper/swiper-bundle.min.js', 'swiper/swiper.js')
    .css('node_modules/swiper/swiper-bundle.min.css', 'swiper/swiper.css')
    .js('node_modules/flowbite/dist/flowbite.js', 'flowbite')
    .sass('resources/sass/app.scss', 'sass');
