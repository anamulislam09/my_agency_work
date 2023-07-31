<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TechBiz - IT Solution & Service HTML Template - Home One - Layerslider</title>
    <meta name="author" content="vecuro">
    <meta name="description" content="TechBiz - IT Solution & Service HTML Template">
    <meta name="keywords" content="TechBiz - IT Solution & Service HTML Template" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/assets/img/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/assets/img/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/assets/img/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/assets/img/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/assets/img/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/assets/img/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/assets/img/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/assets/img/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/img/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('frontend/assets/img/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend/assets/img/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/img/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('frontend/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/assets/img/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.min.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css')}}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/layerslider.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">

</head>

<body>
    @include('layouts.frontend_partial.header')

    <!--==============================
      Hero Area
    ==============================-->

        @yield('content')

    <!--==============================
			Footer Area
	==============================-->

    @include('layouts.frontend_partial.footer')

    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <!--********************************
			Code End  Here
	******************************** -->

    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <!-- <script src="{{ asset('frontend/assets/js/app.min.js')}}"></script> -->
    <script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>
    <!-- Layerslider -->
    <script src="{{ asset('frontend/assets/js/layerslider.utils.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/layerslider.transitions.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- WOW.js Animation -->
    <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>



</body>

</html>
