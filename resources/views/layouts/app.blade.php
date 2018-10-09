<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
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
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">

                @if(Auth::check())
                     <div class="col-lg-4 text-left" >
                    <ul class="list-item main-menu-items" >
                         <li class="list-group-item menu-items">
                            <a href="{{route('home')}}"><span class="fas fa-home" style="margin-right: 10px;"></span>Home</a>
                         </li>

                         <li class="list-group-item menu-items">
                            <a href="{{route('category.create')}}"><span class="fas fa-plus" style="margin-right: 10px;"></span>New Category</a>
                         </li>

                         <li class="list-group-item menu-items">
                            <a href="{{route('categories')}}"><span class="fas fa-align-justify" style="margin-right: 10px;"></span>All Categories</a>
                         </li>
                            
                         <li class="list-group-item menu-items">
                            <a href="{{route('posts')}}"><span class="fas fa-clipboard" style="margin-right: 10px;"></span>All Published Posts</a>
                        </li>

                        <li class="list-group-item menu-items">
                            <a href="{{route('post.create')}}"><span class="fas fa-plus" style="margin-right: 10px;"></span>New Post</a>
                        </li>

                         <li class="list-group-item menu-items">
                            <a href="{{route('tags')}}"><span class="fas fa-tag" style="margin-right: 10px;"></span>All tags</a>
                        </li>
                         <li class="list-group-item menu-items">
                            <a href="{{route('tag.create')}}"><span class="fas fa-plus" style="margin-right: 10px;"></span>New Tag</a>
                        </li>


                         <li class="list-group-item menu-items">
                            <a href="{{route('post.trashed')}}"><span class="fas fa-trash-alt" style="margin-right: 10px;"></span>All Trashed Posts</a>
                        </li>
                    </ul>
                </div>
                @endif
               
                <div class="col-lg-8">
                        @yield('content')
                </div>
            </div>
        </div>
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <<script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
         @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
    </script>
</body>
</html>
