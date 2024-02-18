<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset("asset/css/style.css")}}"

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('asset/lib/swiper-bundle.min.js')}}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <x-nav />
    this is body
<x-form />
{{-- Home Section --}}
<x-home-section />
{{-- Booking Section --}}
<x-booking />
{{-- Package Section --}}
<x-package />
{{-- Service Section --}}
<x-services />
{{-- Gallery Section --}}
<x-gallery />
{{-- Review Section --}}
<x-review />
{{-- Contact Section --}}
<x-contact />
{{-- Footer Section --}}
<x-footer />

<script src="{{asset('asset/js/app.js')}}"></script>
<script src="{{asset('asset/lib/jquery-3.3.1.min.js')}}"></script>

<script>
    $(document).ready(function () {
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 10,
        speed: 400,
        autoplay: {
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
});	
</script>
</body>

</html>