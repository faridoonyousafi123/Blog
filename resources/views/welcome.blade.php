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
        <style>
        
        
            html, body {

                background: url('/uploads/background/background.jpg');
               
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
             
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                margin-top: 200px;
                height: 20vh;
            }

            .flex-left {
                align-items: left;
                display: flex;
                justify-content: left;
            }


      
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                display: flex;
                flex-direction: column;

            }

            .title {
                font-size: 84px;
            }
          .links > a {
                 
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            i{

                color:white !important;
                               font-size: 1.8em !important;
                border-color: none !important;
                margin-bottom:5px !important;

                width: 25.9px !important;
                height: 21.6px !important;

            }
            .links{

                display: flex;
                justify-content: left;
                flex-direction: column;
            }
            

            i:hover{
                align-items: center;
                transform: translateY(-2px);

    box-shadow: rgb(0, 0, 0) 0px 8px 15px -10px;
    transition: transform box-shadow 0.2s ease;
    cursor:pointer;
    
               
            }
            .menu{
              background-color: darkred;



                padding:30px 30px 30px 30px !important;
                border-radius: 20% !important;


            }
            .menu-categories{
                background-color: darkgreen !important;
               
                border-radius: 20% !important;


            }
            .menu-posts{
                background-color: #9999ff !important;
                
                border-radius: 20% !important;


            }
            .menu-tags{
                background-color: #ff1a8c !important;

            }
            .menu-users
            {
                background-color: #ffcc00 !important;
            }
            .menu-profile{
                background-color: #e67300 !important;
            }
            .menu-trash{
                background-color: #669900;
            }
            .links{
                margin-bottom: 20px;
                text-align: center !important;
                


            }
            .links-col{
                justify-content: center;
                display: flex;
                flex-direction: column !important;


            }
            a{
                border-color: none !important;
                align-items: center !important;
            }
            span{
                justify-content: center;
            }
            .content-row{
                display: flex;
                justify-content: center;

            }


            


           
    
}



        </style>
    </head>
    <body>

        <div class="content-row">
            <div class="flex-left full-height">
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <!-- <a href="{{ url('/admin/home') }}">Home</a> -->
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

             @if(Auth::check())
            
             
                    <div class="links">

                    <a href="{{ url('/admin/home') }}"><i class="fas fa-home menu"></i></a>
                   
                    <div class="form-control">
                        <span>Home</span>
                    
                    </div>
                </div>

             

            
                    <div class="links">

                    <a href="{{url('/admin/categories')}}"><i class="fas fa-align-justify menu menu-categories"></i></a>
                    <div class="form-control">
                        <span>Categories</span>
                    </div>
           
                </div>

                
             

            
                    <div class="links">

                    <a href="{{url('admin/posts')}}"><i class="fas fa-clipboard menu menu-posts"></i></a>
                    <div class="form-control">
                        <span>Posts</span>
                    </div>
           
                </div>

                
              

     
                
                    <div class="links">

                    <a href="{{url('admin/tags')}}"><i class="fas fa-tags menu menu-tags"></i></a>
                    <div class="form-control">
                        <span>Tags</span>
                    </div>
           
                </div>

            @if(Auth::user()->admin)

           
                
                    <div class="links">

                    <a href="{{url('admin/users')}}"><i class="fas fa-users menu menu-users"></i></a>
                    <div class="form-control">
                        <span>Users</span>
                    </div>
           
                </div>
                
            

            @endif

            
                    <div class="links">

                    <a href="{{url('admin/users')}}"><i class="fas fa-user-edit menu menu-profile"></i></a>
                    <div class="form-control">
                        <span>Profile</span>
                    </div>
           
                </div>

           
        </div>
        {{-- end of the application first row --}}
        </div>

        <div class="content-row">


            <div class="flex-left" style="margin-right: 680px;">
                
            </style>
                 <div class="links">

                    <a href="{{url('admin/users')}}"><i class="fas fa-trash-alt menu menu-trash"></i></a>
                    <div class="form-control">
                        <span>Trashed Posts</span>
                    </div>
           
                </div>





        
        </div>





        </div>
        

 
        

    

        
         
  @endif
    </body>
</html>