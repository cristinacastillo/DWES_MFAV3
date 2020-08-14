

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

    <!--<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->



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

    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">

    

    <!--<script type="text/javascript" src="{{ asset('../resources/nav.js') }}"></script>-->

    <script type="text/javascript" src="{{ asset('../resources/js/functions.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/modal.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/crud.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/search.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/search2.js') }}" async defer></script>

    <script type="text/javascript" src="{{ asset('../resources/js/form.js') }}" async defer></script>



    <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
    <!--<script type="text/javascript" src="{{ asset('../resources/js/table.js') }}" async defer></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">-->
  <!--  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">-->

    <!--<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <!--<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>-->




<link href="https://fonts.googleapis.com/css2?family=Anton&family=Sriracha&display=swap" rel="stylesheet">





</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light myNav">

      <span class="navbar-brand logoNava" href="#"><img class="logoNav" src="{{ asset('/img/letra.png') }}" alt="imgLogo"></span>

      <button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav ml-auto">

          @guest
            @if (Route::has('register'))
              <li class="nav-item myLi">
                  <a class="nav-link myA" href="{{ route('register') }}"><span class="mySpan">{{ __('Register') }}</span></a>
              </li>
            @endif
          @else
          <li class="nav-item myLi">
              <a class="nav-link myA" ><span class="mySpan">¡Bienvenid@, {{ Auth::user() }}</span></a>
          </li>
          @endguest

          <li class="nav-item myLi">
            <a class="nav-link myA" href="{{ route('home') }}" class="nav-links"><span class="mySpan">Home</span></a>
          </li>

          

          @guest
              {{-- el usuario no está logueado, así que no mostramos el enlace para el logout --}}
              @else

            <li class="nav-item myLi">
              <a class="nav-link myA" href="{{ route('dogs.list') }}" class="nav-links"><span class="mySpan">Dogs</span></a>
            </li>
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


    <div class="container mt-4 mb-5">



        <!-- cuerpo -->
        <div class="row">
            <div class="col">
            @yield('cuerpo')
            </div>
        </div>

    </div>
    

   <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">

      <!-- Footer Elements -->
      <div class="container">

        <!-- Grid row-->
        <div class="row text-center">

          <!-- Grid column -->
          <div class="col-md-12 py-5 text-center">
            <div class="mb-5 text-center">

              <!-- Facebook -->
              <a class="fb-ic" href="https://www.facebook.com/pages/category/Nonprofit-Organization/Mi-fiel-amigo-438509649872478/" target="blank">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic" href="https://sos-dogs.de/hunde-aus-spanien/nachrichten/" target="blank">
                <i class="fas fa-paw fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!-- Google -->
              <a class="g-ic" href="#">
                <i class="fab fa-google fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic" href="https://www.linkedin.com/in/cristina-castillo-obreg%C3%B3n-00a9bb182/" target="blank">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic" href="#">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer text-center py-3">
        <a href="https://www.iescampanillas.com/" target="blank"> Cristina Castillo Obregón - IES Campanillas</a>
      </div>
      <!-- Copyright -->

    </footer>
<!-- Footer -->

    <!-- Links para js del nav, importante colocarlos aquí y en este orden -->
   <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/carrusel.css') }}">
    <script type="text/javascript" src="{{ asset('../resources/js/carrusel.js') }}" async defer></script>


</body>
</html>
