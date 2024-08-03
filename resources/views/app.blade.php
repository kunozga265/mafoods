<!DOCTYPE html>
<html>
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('favicon.png')}}" sizes="32x32" type="image/png">

    <title>{{ config('app.name', 'Malawi Food Data System') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></link>
    <script src="{{ mix('/js/app.js') }}" defer></script>

    {{--<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>--}}
    <!-- Link Swiper's CSS -->
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />--}}

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/bootstrap.min.css')}}"></link><!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/icons.css')}}"></link><!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/color.css')}}"></link><!-- Color -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/style.css')}}"></link><!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/main.css')}}"></link><!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/responsive.css')}}"></link><!-- Responsive -->



    @inertiaHead
    @routes
</head>

<body>


@inertia

<!-- Scripts -->
<script src="{{asset('assets_r/js/jquery.min.js')}}" type="text/javascript"></script><!-- jQuery -->
<script src="{{asset('assets_r/js/bootstrap.min.js')}}" type="text/javascript"></script><!-- Bootstrap -->
<script src="{{asset('assets_r/js/owl.carousel.min.js')}}" type="text/javascript"></script><!-- Owl Carousel -->
<!-- Swiper JS -->
{{--<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>--}}
    <script src="{{asset('assets_r/js/swiper-bundle.min.js')}}" type="text/javascript"></script><!-- Owl Carousel -->

<script src="{{asset('assets_r/js/select2.full.min.js')}}" type="text/javascript"></script><!-- Select2 -->
<script src="{{asset('assets_r/js/slim-scrollbar.min.js')}}" type="text/javascript"></script><!-- Scroll Bar -->
<script src="{{asset('assets_r/js/jquery.downCount.js')}}" type="text/javascript"></script><!-- Down Count -->
{{--<script src="{{asset('assets_r/js/isotope.min.js')}}" type="text/javascript"></script><!-- Isotope -->--}}
{{--<script src="{{asset('assets_r/js/isotope-int.js')}}" type="text/javascript"></script><!-- Isotope -->--}}
<script src="{{asset('assets_r/js/script.js')}}" type="text/javascript"></script><!-- Custom -->



</body>
</html>
