@extends('layouts.plantilla')

@section('cuerpo')



		<div class="main">
			<ul class="cardsC">
				@foreach($dog as $item)
					<li class="cardsC_item">
						<div class="cardC">
							<div class="cardC_image">
								<img src="{{ asset('/storage/dogs') }}/{{ $item->photo }}"/>
								
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