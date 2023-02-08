<!DOCTYPE html>
<html lang="en" class="scrollbar-hide">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('swiper/swiper.css') }}"/>
    <title>{{ $title }}</title>
</head>
<body class="scrollbar-thin scrollbar-rounded-sm scrollbar-thumb-gold">
    <header>
        <x-navbar/>
    </header>
    <main>
        {{ $slot }}
    </main>

     <!-- script start -->
     <script src="{{ asset('swiper/swiper.js') }}"></script>
    <script src="{{ asset('flowbite/flowbite.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- script end -->
</body>
</html>
