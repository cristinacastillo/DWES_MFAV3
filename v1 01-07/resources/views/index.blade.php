<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
        touch: true,
        pauseOnAction: false,
        pauseOnHover: false,
    });
  });
</script>
    <style>
        .o {
            background-color: rgba(162, 242, 233, 0.3);
        }
        
        .c {
            /*background-color: rgba(88, 245, 164, 0.3);*/
        }
        
        .o,
        .c {
            border: 0.1px solid lightgrey;
            border-radius: 10px;
        }
        
        .contenedor {
            margin-right: 8vw;
            margin-left: 8vw;
            margin-top: 3vw;
            margin-bottom: 3vw;
        }

        @font-face {
  font-family: 'flexslider-icon';
  src: url('fonts/flexslider-icon.eot');
  src: url('fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('fonts/flexslider-icon.woff') 
  format('woff'), url('fonts/flexslider-icon.ttf') format('truetype'), url('fonts/flexslider-icon.svg#flexslider-icon') format('svg');
  font-weight: normal;
  font-style: normal;
}

*{
    margin: 0;
    padding: 0;
}

.flexslider{
    width: 100%;
    position: relative;
}

.slides{
    overflow: hidden;
}

.slides img{
    width: 100%;
}

.slides,
.flex-control-nav,
.flex-direction-nav {
  margin: 0;
  padding: 0;
  list-style: none;
}

.flex-control-nav{
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 5%;
    z-index: 999;
}

.flex-control-nav li{
    display: inline-block;
    margin: 0 6px;
}

.flex-control-nav li a{
    display: block;
    background: #777777;
    width: 12px;
    height: 12px;
    border-radius: 12px;
    text-indent: -9999px;
}

.flex-control-nav li a:hover{
    background: #2E2E2E;
}

.flex-control-nav li a.flex-active{
    background: #2E2E2E;    
}

.flex-direction-nav a{
    display: block;
    text-decoration: none;
    position: absolute;
    top: 50%;
    z-index: 999;
    width: 40px;
    height: 40px;
    overflow: hidden;
    opacity: 0;
    -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.flex-direction-nav .flex-prev{
    left: 0;
}

.flex-direction-nav .flex-next{
    right: 0;
}

.flex-direction-nav a:before {
  font-family: "flexslider-icon";
  font-size: 40px;
  display: inline-block;
  content: '\f001';
  color: #fff;
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
}
.flex-direction-nav a.flex-next:before {
  content: '\f002';
}

.flex-caption p{
    font-family: Lato;
    position: absolute;
    top: 50%;
    text-align: center;
    width: 100%;
    font-size: 45px;
    color: #fff;
    font-weight: bold;
}

.flexslider:hover .flex-direction-nav .flex-prev{
    opacity: 0.7;
    left: 10px;
}

.flexslider:hover .flex-direction-nav .flex-prev:hover{
    opacity: 1;
}

.flexslider:hover .flex-direction-nav .flex-next{
    opacity: 0.7;
    right: 10px;
}

.flexslider:hover .flex-direction-nav .flex-next:hover{
    opacity: 1;
}
    </style>

</head>

<body>

    <div class="contenedor">

        <div class="row ">
            <div class="col-md-8 text-center o">
               
                <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="imagenes/1.jpg" alt="">
                <section class="flex-caption">
                    <p>LOREM IPSUM 1</p>
                </section>
            </li>
            <li>
                <img src="imagenes/2.jpg" alt="">
                <section class="flex-caption">
                    <p>LOREM IPSUM 2</p>
                </section>
            </li>
            <li>
                <img src="imagenes/3.jpg" alt="">
                <section class="flex-caption">
                    <p>LOREM IPSUM 3</p>
                </section>
            </li>
        </ul>
    </div>

            </div>
            <div class="col-md-4 mx-auto c">


                <div class="card " style="max-width: 27rem;">
                    <div class="card-header">Login</div>
                    <div class="card-body">


                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}"  autocomplete="email" autofocus required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                    <a href="{{ route('register') }}">
                        Regístrate aquí
                    </a>

                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                      </div>
                    </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>