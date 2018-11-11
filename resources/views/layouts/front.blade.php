<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $title }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">

    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">
    <!--Styles for RTL-->

    <link rel="stylesheet" type="text/css" href="app/css/rtl.css">

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
    </style>

</head>


<body class=" ">

<div class="content-wrapper">
    
   @include('include.header')

      
    @yield('content')
        



    







<!-- Overlay Search -->

<div class="overlay_search">
    <div class="container">
        <div class="row">
            <div class="form_search-wrap">
                <form method="GET" action="/results">
                    <input class="overlay_search-input" name="query" placeholder="Type and hit Enter..." type="text">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Overlay Search -->

<!-- JS Script -->

<script src="app/js/jquery-2.1.4.min.js"></script>
<script src="app/js/crum-mega-menu.js"></script>
<script src="app/js/swiper.jquery.min.js"></script>
<script src="app/js/theme-plugins.js"></script>
<script src="app/js/main.js"></script>
<script src="app/js/form-actions.js"></script>

<script src="app/js/velocity.min.js"></script>
<script src="app/js/ScrollMagic.min.js"></script>
<script src="app/js/animation.velocity.min.js"></script>


<!-- ...end JS Script -->

</body>
</html>
