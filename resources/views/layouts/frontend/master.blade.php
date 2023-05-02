<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <!--frontend css-->
    <link rel="shortcut icon" href="{{asset('assets/frontend/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/transition-animations.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">
        <!-- This styles needs for demo -->
        <link rel="stylesheet" href="{{asset('assets/frontend/preview/lmpixels-demo-panel.css')}}preview/lmpixels-demo-panel.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    @include('layouts.frontend.partial.header')
    @yield('content')
    {{-- @include('layouts.frontend.partial.footer') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @include('layouts.frontend.partial.footer')
    <!-- /This styles needs for demo -->

    <script src="{{asset('assets/frontend/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/frontend/js/page-transition.js')}}"></script>
    <script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/validator.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.shuffle.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('assets/frontend/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.hoverdir.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>

    <!-- Demo Color changer Script -->
    <script src="{{asset('assets/frontend/')}}preview/lmpixels-demo-panel.js"></script>
    <!-- /Demo Color changer Script -->
</body>
</html>
