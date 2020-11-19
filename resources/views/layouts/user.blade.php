<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon"  href="storage/four.JPG">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<!-- adding bootstrap theme and jquery from bootswatch -->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script type="text/javascript" src="{{url('js/jquery-3.1.0.js')}}"></script>
     <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>

       
    </head>
    <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Automatic Vehicle Identification System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-link">     
        <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</a>
      </li>

    <li class="nav-link">
     <a class="nav-link" href="{{ route('help') }}" style="color: white">Make Complaint</a> 
      </li>

<li class="nav-link">
     <a class="nav-link" href="{{ route('profile') }}" style="color: white">Check Profile</a> 
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        </div>
    </nav>
    <br>
       <div class="content">
                <div class="title m-b-md">
                <h3 align="center" style="green"> Automatic Vehicle Identification System </h3>
               <div align="center"> <img src="{{ 'storage/one.JPG'}}" height="180" width="300" /> 
               </div>

    <main class="py-4">
        @yield('content')
    </main>

 
    <!-- Footer -->
    
    <!-- Footer -->
</div>
</body>
</html>
