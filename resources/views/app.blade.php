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

{{--    <link href="{{ asset('/css/main.css') }}" rel="stylesheet"></link>--}}
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></link>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/uikit.js') }}" defer></script>

    <!--====== Favicon Icon ======-->
{{--    <link rel="shortcut icon" href="assets/img/favicon.ico" type="img/png" />--}}
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"></link>
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"></link>
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}"></link>
    <!--====== Slick Css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}"></link>
    <!--====== Lity Css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/lity.min.css')}}"></link>
    <!--====== Main css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"></link>
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"></link>

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/material-icons.css') }}">

    @inertiaHead
    @routes
</head>

<body>

@inertia


<!--====== jquery js ======-->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!--====== Bootstrap js ======-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!--====== Inview js ======-->
<script src="{{asset('assets/js/jquery.inview.min.js')}}"></script>
<!--====== Slick js ======-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!--====== Lity js ======-->
<script src="{{asset('assets/js/lity.min.js')}}"></script>
<!--====== Wow js ======-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!--====== Main js ======-->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
