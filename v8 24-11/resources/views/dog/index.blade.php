@extends('layouts.plantilla')

@section('cuerpo')

@if (session('message'))
<div class="row mt-2">
  <div class="col">
	<div class="alert alert-success text-center" role="alert">
	  {{ session('message') }}
	</div>
  </div>
</div>
@endif


<input id="search3" type="text" class=myInput placeholder="Search here the dog name" name="search3">  
	
		<div class="main" id="result3">
			<ul class="cardsC" id="ajax3"></ul>


			<ul class="cardsC" id="index3">
				@foreach($dog as $item)
					
						<li class="cardsC_item">
							<div class="cardC">
								<div class="cardC_image">
									<img src="{{ asset('/storage/dogs') }}/{{ $item->photo }}" class="imgCard" />
									
								</div>
								<div class="cardC_content">
									<!--<h2 class="card_title">{{ $item->name }}</h2>
									<p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>-->
									<a href="{{ route('dog.info', ['id' => $item->idDog]) }}"><button class="buttonC cardC_buttonC">{{ $item->name }}</button></a>
								</div>
							</div>
						</li>
					
				@endforeach
			</ul>
		</div>

		<div class="row">
			<div class="mx-auto">
			{{ $dog->links() }}
			</div>
		</div>
	
@stop