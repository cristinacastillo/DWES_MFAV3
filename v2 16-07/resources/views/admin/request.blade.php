@extends('layouts.plantilla')
@section('cuerpo')


@if($adops)
	<h1>Requests</h1>
	

		
		<table class="table">
		  <thead>
		    <tr>
		      <!--<th scope="col">idAdop</th>
		      <th scope="col">idUse</th>
		      <th scope="col">idDog</th>-->
		      <th scope="col">user</th>
		      <th scope="col">reason</th>
		      <th scope="col">date request</th>
		      <th scope="col">name dog</th>
		      <th scope="col">status</th>
		      <th scope="col"></th>

		    </tr>
		  </thead>
		  @foreach($adops as $item)
		  	
		  <tbody>
		    <tr>
		      <!--<td>{{ $item->idAdop }}</td>
		      <td>{{ $item->idUse }}</td>
		      <td>{{ $item->idDog }}</td>-->
		      <td><a href="{{ route('user.info',['id' => $item->idUse]) }}">{{ $item->nameUse }}</a></td>
		      <td>{{ $item->reason }}</td>
		      <td>{{ $item->dateAdop }}</td>
		      <td>{{ $item->nameDog }}</td>
		      <td><a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 1, 'idDog' => $item->idDog]) }}" "><span class="badge badge-pill badge-success">Accept</span></a></td>
		      <td><a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 2, 'idDog' => $item->idDog]) }}" "><span class="badge badge-pill badge-danger">Denny</span></a></td>
		    </tr>

		  </tbody>
		  	
		  @endforeach
		
	@endif



			<!-- Modal 
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body mx-auto">
			       <div class="card cardUser">

						<img src="{{ asset('/storage/profiles') }}/{{ auth()->user()->photo }}" class="card-img-top mx-auto mt-4 imgUser" alt="{{ auth()->user()->name }} {{auth()->user()->surnames}}">

						<div class="card-body">
							<span class="badge myBadge">Name</span>
							<p class="text-center ml-1" >{{ auth()->user()->name }}</p>

							<span class="badge myBadge">Surnames</span>
							<p class="text-center ml-1" >{{ auth()->user()->surnames }}</p>

							<span class="badge myBadge">E-mail</span>
							<p class="text-center ml-1" >{{ auth()->user()->email }}</p>

							<span class="badge myBadge">Phone Number</span>
							<p class="text-center ml-1" >{{ auth()->user()->phoneNumber }}</p>

						</div>

					</div>
			      </div>
			      
			    </div>
			  </div>
			</div>-->

@stop
