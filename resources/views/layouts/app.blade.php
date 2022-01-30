<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('Front/css/bootstrap.min.css')}}" rel="stylesheet" >

    <title>@yield('title')</title>
  </head>
  <body>
    
  @yield('content')
  
    <script src="Front/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="{{asset('Front/js/popper.min.js')}}"></script>
    <script src="{{asset('Front/js/bootstrap.min.js')}}" ></script>
   
  </body>
</html>