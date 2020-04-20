<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Document</title>

     <!-- Font -->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/card.css') }}" />
</head>
<body>

@guest

@else     
     <nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
    <a href="" class="logo">logo</a>
    <ul class="main-nav" id="js-menu">
      <li>
        <a href="{{ route('dogs.list') }}" class="nav-links">Dogs</a>
      </li>
      <li>
        <a href="#" class="nav-links">Products</a>
      </li>
      <li>
        <a href="#" class="nav-links">About Us</a>
      </li>
      <li>
        <a href="#" class="nav-links">Contact Us</a>
      </li>
      <li>
        @guest
        {{-- el usuario no está logueado, así que no mostramos el enlace para el logout --}}
        @else
        <a href="{{ route('logout') }}" class="nav-links">Logout<i class="fas fa-sign-out-alt"></i></a>
        @endguest
        
      </li>
    </ul>


  </nav>
  @endguest
  
    <div class="container mt-4">

       

        <!-- cuerpo -->
        <div class="row">
            <div class="col">
            @yield('cuerpo')
            </div>
        </div>

    </div>
    <!-- Links para js del nav, importante colocarlos aquí y en este orden -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>


</body>
</html>