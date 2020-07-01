

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



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/card.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/comments.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">

    <script type="text/javascript" src="{{ asset('../resources/js/functions.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/modal.js') }}" async defer></script>


</head>
<body>


     <nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
    <a href="" class="logo">logo</a>
    <ul class="main-nav" id="js-menu">

      @guest
        @if (Route::has('register'))
          <li>
              <a class="nav-links" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @endif
      @else
      <li>
          <a class="nav-links">¡Bienvenid@, {{ Auth::user() }}</a>
      </li>
      @endguest
      <li>
        <a href="{{ route('dogs.list') }}" class="nav-links">Dog</a>
      </li>
      <li>
        <a href="#" class="nav-links">About Us</a>
      </li>
      <li>
        <a href="#" class="nav-links">Contact Us</a>
      </li>
      @guest
        {{-- el usuario no está logueado, así que no mostramos el enlace para el logout --}}
        @else
      <li>
        <a href="{{ route('user.profile') }}" class="nav-links">Profile<i class="fas fa-sign-out-alt"></i></a>
      </li>
      <li>
        <a href="{{ route('logout') }}" class="nav-links">Logout<i class="fas fa-sign-out-alt"></i></a>
      </li>

      @endguest

    </ul>


  </nav>


    <div class="container mt-4 mb-5">



        <!-- cuerpo -->
        <div class="row">
            <div class="col">
            @yield('cuerpo')
            </div>
        </div>

    </div>
    <!-- Links para js del nav, importante colocarlos aquí y en este orden -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('../resources/nav.js') }}"></script>


</body>
</html>
