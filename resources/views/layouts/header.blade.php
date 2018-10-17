
<head>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
 
    <style>
                body{
                    height: 100vh;
                    background: url('/uploads/background/background.jpg');
               
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover; 
                }
                
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