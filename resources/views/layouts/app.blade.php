<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog By Faridoon Yousafi</title>
     @yield('style')
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
   
</head>
<body>
   <div id="app">
        <nav style="background-color: rgba(14, 26, 31, 0.41) !important;border: none;box-shadow: rgb(25, 23, 23) 1px 0px 30px 2px; height: 58px;"class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a style="width: 10px"class="navbar-brand" href="{{ url('/admin') }}">
                       <span class="fas fa-grip-horizontal no-effect" style="font-size: 2.0em; margin-bottom: 4px; color:white"></span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           <!--  <li><a href="{{ route('login') }}">Login</a></li> -->
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown" style="opacity: 1.0 !important;" >
                                <a style="opacity: 1.0 !important; "href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img src="{{asset(Auth::user()->profile->avatar)}}" alt="" width="30px" height="30px" style="border-radius: 50%;"> <span style="margin-right:4px;margin-left: 3px;color: white;">{{Auth::user()->name}}</span><span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu no-effect" role="menu" style="background-color: rgb(35, 53, 59); margin-bottom: 5px;">
                                   
                                 

                                     <li>
                                        <a style="color:white;" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                            <span class="fas fa-sign-out-alt"></span>
                                             
                                             Log Out

                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">

           
               
                <div class="col-lg-12">
                        @yield('content')

                </div>

            </div>
        </div>
        
    </div>

    <!-- Scripts -->


         <script src="{{ asset('js/select.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/toastr.min.js') }}"></script>
     <script src="{{ asset('js/modal.js') }}"></script>
     
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
         @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
         @if($errors)
            <?php
            foreach ($errors->all() as $error) {
                ?>
                toastr.error("{!!$error!!}")
                <?php
            }
            ?>

        @endif
    </script>


 @yield('scripts')
</body>
</html>
