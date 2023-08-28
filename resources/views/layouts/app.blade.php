<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('assets/admin/js/soft-ui-dashboard.js') }}" defer></script> -->

    <!-- Fonts -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    
    
    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />
    
    <!-- Libs CSS -->
    
    
    <!-- Theme CSS -->

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front-app/media/logo profil.png')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/green-audio-player.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/odometer-theme-default.css') }}">

    

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/app.css') }}">
</head>
<body class="sticky-header">

<a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="main-wrapper" class="main-wrapper">
    @include('layouts.front.navbar')    
    @yield('content')  
    </div>
</body>
     <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    
    <!-- Vendor JS -->
  
    
    <!-- Theme JS -->
    <script src="{{ asset('assets/landing-front/js/theme.bundle.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery-appear.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/slick.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/sal.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/js.cookie.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery.style.switcher.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/tilt.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/green-audio-player.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery.nav.js')}}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('assets/front-app/js/app.js')}}"></script>    

</html>
