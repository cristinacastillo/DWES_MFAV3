@extends('layouts.plantilla')

@section('cuerpo')


<section>
	

		<div class="row">

			@guest

			<div class="col-sm-8 g">

			@else

			<div class="col-sm-12  g">

			@endif

				<h2 class="mypd  mt-4 text-center mx-auto">Do you want to adopt a dog?</h2><hr>

				<!--<p class="text-center"> In 'Mi Fiel Amigo' we rescue dogs that have no home, have been abandoned, or mistreated. We are looking for a new home for them so that they can live happily..</p><br>-->


				<ul class="fa-ul list">
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>Login or register.</li>
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>Find the dog that you like the most. With its description you will be able to know a lot about it.</li>
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>Request the adoption stating why you think you would be his ideal owner.</li>
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>The administrator will review it and contact you for an interview if you pass the previous point.</li>
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>Good luck!</li>

				</ul>

			</div>

			
			<div class="col-sm-4">

				@guest

					<div class="">

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
				@else



				@endguest


			</div>

			

		</div>


		<div class="row">

			<div class="col-sm-8 ">

	    		<div class="carrusel ">

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

			<div class="col-sm-4 g">

				<h2 class="mypd  mt-4 text-center mx-auto">Why adopt and not buy a dog</h2><hr>

				<p class="text-center"> In 'Mi Fiel Amigo' we rescue dogs that have no home, have been abandoned, or mistreated. We are looking for a new home for them so that they can live happily..</p><br>

				
					<ul class="fa-ul">
						<li><span class="fa-li"><i class="fas fa-paw"></i></span>Buying dogs instead of adopting encourages animal abuse.</li>
						<li><span class="fa-li"><i class="fas fa-paw"></i></span>Adoption can save a street dog's life.</li>
						<li><span class="fa-li"><i class="fas fa-paw"></i></span>A dog without a breed can also be pretty.</li>
						<li><span class="fa-li"><i class="fas fa-paw"></i></span>It will give you greater satisfaction when picking up a homeless, and probably abused dog.</li>
						<li><span class="fa-li"><i class="fas fa-paw"></i></span>An adopted dog will thank you much more!</li>

					</ul>
				

			</div>


		</div>

		<br>
		<div class="row">

			<div class="col-sm-4 g">

				<h2 class="mypd  mt-4 text-center mx-auto">Work of an animal protector</h2><hr>

				<p class="text-center"> In 'Mi Fiel Amigo' we rescue dogs that have no home, have been abandoned, or mistreated. We are looking for a new home for them so that they can live happily..</p><br>


				<ul class="fa-ul">
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>Rescue homeless animals.</li>
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>Find them a home</li>
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>In their stay in the shelter they have to be fed, cared for, castrated ...</li>
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>Disseminate and raise awareness about animal welfare</li>
					<li><span class="fa-li"><i class="fas fa-paw"></i></span>Give them a lot of love!</li>

				</ul>

			</div>

			<div class="col-sm-8 mt-2">
				
				<!--<video id="sampleMovie" class="video" preload controls>
			        <source src="{{ asset('/img/video/prote.mp4') }}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
			    </video>-->

			    <div class="embed-responsive embed-responsive-16by9 video" autoplay="false=">
					<iframe class="embed-responsive-item" src="{{ asset('/img/video/prote.mp4') }}"></iframe>
				</div>
			
			</div>


		</div>

</section>
		

	

		
	
@stop