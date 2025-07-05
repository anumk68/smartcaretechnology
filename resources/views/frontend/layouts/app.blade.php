<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Care - {{ Route::currentRouteName() }}</title>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.png')}}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/meanmenu.css')}}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/all.min.css')}}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/swiper-bundle.min.css')}}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">

</head>

<body>
    @include('frontend.layouts.header')

    <div class="main">
        @yield('content')


    </div>


    @include('frontend.layouts.footer')
</body>

</html>
<!-- Back to top area end here -->

    <!-- Jquery 3.7.0 Min Js -->
    <script src="{{asset('public/assets/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <!-- Mean menu Js -->
    <script src="{{asset('public/assets/js/meanmenu.js')}}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{asset('public/assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Counterup min Js -->
    <script src="{{asset('public/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow min Js -->
    <script src="{{asset('public/assets/js/wow.min.js')}}"></script>
    <!-- Pace min Js -->
    <script src="{{asset('public/assets/js/pace.min.js')}}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{asset('public/assets/js/magnific-popup.min.js')}}"></script>
    <!-- Nice select min Js -->
    <script src="{{asset('public/assets/js/nice-select.min.js')}}"></script>
    <!-- Isotope pkgd min Js -->
    <script src="{{asset('public/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('public/assets/js/jquery.waypoints.js')}}"></script>
    <!-- Script Js -->
    <script src="{{asset('public/assets/js/script.js')}}"></script>
