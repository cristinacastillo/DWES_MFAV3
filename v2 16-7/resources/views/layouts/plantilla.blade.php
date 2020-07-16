

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

    



    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>



<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/card.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/comments.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">

    <!--<script type="text/javascript" src="{{ asset('../resources/nav.js') }}"></script>-->

    <script type="text/javascript" src="{{ asset('../resources/js/functions.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/modal.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/crud.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/search.js') }}" async defer></script>



</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light myNav">

      <span class="navbar-brand logoNava" href="#"><img class="logoNav" src="{{ asset('/img/letterLogo.png') }}" alt="imgLogo"></span>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav ml-auto">

          @guest
            @if (Route::has('register'))
              <li class="nav-item myLi">
                  <a class="nav-link myA" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
          @else
          <li class="nav-item myLi">
              <a class="nav-link myA" ><span class="mySpan">¡Bienvenid@, {{ Auth::user() }}</span></a>
          </li>
          @endguest

          <li class="nav-item myLi">
            <a class="nav-link myA" href="{{ route('dogs.list') }}" class="nav-links"><span class="mySpan">Dogs</span></a>
          </li>

          @guest
              {{-- el usuario no está logueado, así que no mostramos el enlace para el logout --}}
              @else
            <li class="nav-item myLi">
              <a class="nav-link myA" href="{{ route('user.profile') }}" class="nav-links"><span class="mySpan">Profile</span></a>
            </li>
            @if(auth()->user()->profile == 1)

            <li class="nav-item myLi">
              <a class="nav-link myA" href="{{ route('admin') }}" class="nav-links"><span class="mySpan">Admin</span></a>
            </li>

            @endif
            <li class="nav-item myLi">
              <a class="nav-link myA" href="{{ route('logout') }}" class="nav-links"><span class="mySpan">Logout<i class="fas fa-sign-out-alt myI"></i></span></a>
            </li>

      
          @endguest

          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->

        </ul>

      </div>

    </nav>

    <!-- <nav class="navbar">
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
        <a href="{{ route('user.profile') }}" class="nav-links">Profile</a>
      </li>
      @if(auth()->user()->profile == 1)

      <li>
        <a href="{{ route('admin') }}" class="nav-links">Admin</a>
      </li>

      @endif
      <li>
        <a href="{{ route('logout') }}" class="nav-links">Logout<i class="fas fa-sign-out-alt"></i></a>
      </li>

      
      @endguest



    </ul>


  </nav>-->


    <div class="container mt-4 mb-5">



        <!-- cuerpo -->
        <div class="row">
            <div class="col">
            @yield('cuerpo')
            </div>
        </div>

    </div>
    <!-- Links para js del nav, importante colocarlos aquí y en este orden -->
   <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
