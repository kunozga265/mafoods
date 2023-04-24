<!DOCTYPE html>
<html>
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Malawi Food Data System') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></link>
    <script src="{{ mix('/js/app.js') }}" defer></script>


    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/bootstrap.min.css')}}"></link><!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/icons.css')}}"></link><!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/style.css')}}"></link><!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/main.css')}}"></link><!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/responsive.css')}}"></link><!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_r/css/color.css')}}"></link><!-- Color -->

    @inertiaHead
    @routes
</head>

<body>

@inertia

<!-- Scripts -->
<script src="{{asset('assets_r/js/jquery.min.js')}}" type="text/javascript"></script><!-- jQuery -->
<script src="{{asset('assets_r/js/bootstrap.min.js')}}" type="text/javascript"></script><!-- Bootstrap -->
<script src="{{asset('assets_r/js/owl.carousel.min.js')}}" type="text/javascript"></script><!-- Owl Carousel -->
<script src="{{asset('assets_r/js/select2.full.min.js')}}" type="text/javascript"></script><!-- Select2 -->
<script src="{{asset('assets_r/js/slim-scrollbar.min.js')}}" type="text/javascript"></script><!-- Scroll Bar -->
<script src="{{asset('assets_r/js/jquery.downCount.js')}}" type="text/javascript"></script><!-- Down Count -->
<script src="{{asset('assets_r/js/isotope.min.js')}}" type="text/javascript"></script><!-- Isotope -->
<script src="{{asset('assets_r/js/isotope-int.js')}}" type="text/javascript"></script><!-- Isotope -->
<script src="{{asset('assets_r/js/script.js')}}" type="text/javascript"></script><!-- Custom -->

</body>
</html>
