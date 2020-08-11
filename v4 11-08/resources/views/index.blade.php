@extends('layouts.plantilla')

@section('cuerpo')



		<div class="row">

			<div class="col-sm-8 o">
				<p>aa</p>
			</div>

			<div class="col-sm-4">

				<div class="container">

					<form class="myForm" method="POST" action="{{ route('login') }}">

						@csrf
			            <div class="field">
			                
			                <input id="email" type="email" name="email" class="myInput @error('email') is-invalid @enderror"  value="{{ old('email') }}"  autocomplete="email" autofocus required>
			                <label class="myLabel" for="email">Email</label>

			                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

			            </div>
			            
			            <div class="field">

			                <input id="password" type="password" name="password" class="myInput @error('password') is-invalid @enderror" autocomplete="current-password" required>
			                <label class="myLabel" for="password">Password</label>

			                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

			            </div>
			            <button class="myButton" type="submit" >Login</button>
			        </form>
			    </div>

			</div>
		</div>


		<div class="row">

			<div class="col-sm-8 ">

	    		<div class="carrusel">

			        <!-- Full-width images with number and caption text -->
			        <div class="myCarrusel fadeC">
			            
			            <img class="imgCarrusel" src="{{ asset('/img/img4.png') }}">
			            
			        </div>

			        <div class="myCarrusel fadeC">
			            
			            <img class="imgCarrusel" src="{{ asset('/img/img1.jpg') }}">
			            
			        </div>

			        <div class="myCarrusel fadeC">
			            
			            <img class="imgCarrusel" src="{{ asset('/img/img2.jpg') }}">
			            
			        </div>

			        <div class="myCarrusel fadeC">
			           
			            <img class="imgCarrusel" src="{{ asset('/img/img3.jpg') }}">
			            
			        </div>

			        <!-- Next and previous buttons -->
			        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			        <a class="next" onclick="plusSlides(1)">&#10095;</a>
			    </div>

	    		<br>

			    <!-- The circles-->
			    <div style="text-align:center">
			        <span class="circle" onclick="currentSlide(1)"></span>
			        <span class="circle" onclick="currentSlide(2)"></span>
			        <span class="circle" onclick="currentSlide(3)"></span>
			        <span class="circle" onclick="currentSlide(4)"></span>
			    </div>

			</div>

			<div class="col-sm-4 c">

			</div>


		</div>


		
	

		
	
@stop