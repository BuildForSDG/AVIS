<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"  href="storage/four.JPG">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AVIS | Admin </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- adding bootstrap theme and jquery from bootswatch -->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script type="text/javascript" src="{{url('js/jquery-3.1.0.js')}}"></script>
     <script type="text/javascript" src="{{url('js/jquery-3.1.0.js')}}"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
   <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container"> 
             <a class="navbar-brand" href="{{ url('home') }}">
              AVIS
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button> 


             <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
       <!--     Left Side Of Navbar-->               
                <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-link">     
                        <a class="nav-link" href="{{ url('admin') }}" style="color: green">Home</a>
               </li> -->

        <li class="nav-link">
            <a class="nav-link" href="{{ ('home') }}" style="color: green"> Home</a>
           </li>
            <li class="nav-link">
            <a class="nav-link" href="{{ ('surveillance') }}" style="color: green"> Add Surveillance</a>
           </li>
      
           <li class="nav-link">
            <a class="nav-link" href="{{ ('vehicle') }}" style="color: green"> Add Vehicle</a>
           </li>
          <li class="nav-link">
            <a class="nav-link" href="{{ ('vehicle_admin') }}" style="color: green">Vehicle List</a> 
          </li>

            <li class="nav-link">
            <a class="nav-link" href="{{ ('surveillance_admin') }}" style="color: green">Surveillance List</a> 
          </li>
           <li class="nav-link">
            <a class="nav-link" href="{{ ('request') }}" style="color: green">List of Requests</a> 
            </li>               
            
            <li class="nav-link">
            <a class="nav-link" href="{{ ('imagecapture') }}" style="color: green">Captured Images by photo mgt</a> 
            </li>
            
             </ul> 

        <!--    Right Side Of Navbar -->                              
                              <ul class="navbar-nav ml-auto">
           <!--  Authentication Links --> 
             @guest
                        <li class="nav-item">-
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> 
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest 
                </ul> 
            
           
           </div>
        </div>
    </nav> 

<div class="content">
                <div class="title m-b-md">
               <div align="center"> <img src="{{ 'storage/four.JPG'}}" height="120" width="200" /> 
               </div>

    <main class="py-4">
        @yield('content')
    </main>
  
</div>
</body>
</html>



