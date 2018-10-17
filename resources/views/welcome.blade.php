
<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
      <title>Laravel</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
   
      <link rel="newest stylesheet" href="{{asset('css/app.css') }}">
      <link rel="newest stylesheet" href="{{asset('css/home.css') }}">
   <style>
      
   </style>
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
                       Home
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
                                    <img src="{{ asset(Auth::user()->profile->avatar) }}" alt="" width="30px" height="30px" style="border-radius: 50%;"> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                   
                                      <li>
                                        <a href="{{route('user.profile')}}" class="pointer">
                                            <span class="fas fa-user no-effect"></span>
                                            My Profile
                                         </a>
                                    </li>

                                     <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                            <span class="fas fa-sign-out-alt move"></span>
                                          

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


   
      <div class="content-row">
         <div class="flex-left full-height">
            @if (Route::has('login'))
            <div class="top-right links">
               @if (Auth::check())
               <!-- <a href="{{ url('/admin/home') }}">Home</a> -->
               @else
              
               @endif
            </div>
            @endif
            @if(Auth::check())
            <div class="child-main">
                  
                  <div class="links">
               <a class="mytag mytags" href="{{ url('/admin/home') }}"><i class=" myicon fas fa-home menu"></i></a>
               <div class=" ">
                  <span class="myspan">Home</span>
               </div>
            </div>
            <div class="links">
               <a class="mytag mytags" href="{{url('/admin/categories')}}"><i class="myicon fas fa-align-justify menu menu-categories"></i></a>
               <div class=" ">
                  <span class="myspan">Categories</span>
               </div>
            </div>
            <div class="links">
               <a class="mytag mytags" href="{{url('admin/posts')}}"><i class="myicon fas fa-clipboard menu menu-posts"></i></a>
               <div class=" ">
                  <span class="myspan">Posts</span>
               </div>
            </div>
            <div class="links">
               <a class="mytag mytags" href="{{url('admin/tags')}}"><i class="myicon fas fa-tags menu menu-tags"></i></a>
               <div class=" ">
                  <span class="myspan">Tags</span>
               </div>
            </div>
            @if(Auth::user()->admin)
            <div class="links">
               <a class="mytag mytags" href="{{url('admin/users')}}"><i class="myicon fas fa-users menu menu-users"></i></a>
               <div class=" ">
                  <span class="myspan">Users</span>
               </div>
            </div>
            @endif
            <div class="links">
               <a class="mytag mytags" href="{{url('admin/users/profile')}}"><i class="myicon fas fa-user-edit menu menu-profile"></i></a>
               <div class="myspan">
                  <span class="myspan">Profile</span>
               </div>
            </div>
            <div class="links">
               <a class="mytag mytags" href="{{url('admin/post/trashed')}}"><i class="myicon fas fa-trash-alt menu menu-trash"></i></a>
               <div class="myspan">
                  <span class="myspan">Trashed Posts</span>
               </div>
            </div>

            </div>

            
         </div>

      </div>
      @endif
      <script src="{{ asset('js/app.js') }}"></script>
   </body>
</html>
