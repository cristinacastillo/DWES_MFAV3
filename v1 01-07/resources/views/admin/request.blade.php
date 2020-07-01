@extends('layouts.plantilla')
@section('cuerpo')


@if($adops)
	<h1>Mis Adopciones Pendientes</h1>
	

		
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">idAdop</th>
		      <th scope="col">idUse</th>
		      <th scope="col">idDog</th>
		      <th scope="col">nameUsu</th>
		      <th scope="col">reason</th>
		      <th scope="col">dateAdop</th>
		      <th scope="col">nameDog</th>
		      <th scope="col">status</th>
		      <th scope="col"></th>

		    </tr>
		  </thead>
		  @foreach($adops as $item)
		  	
		  <tbody>
		    <tr>
		      <td>{{ $item->idAdop }}</td>
		      <td>{{ $item->idUse }}</td>
		      <td>{{ $item->idDog }}</td>
		      <td>{{ $item->nameUse }}</td>
		      <td>{{ $item->reason }}</td>
		      <td>{{ $item->dateAdop }}</td>
		      <td>{{ $item->nameDog }}</td>
		      <td><a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 1, 'idDog' => $item->idDog]) }}" "><span class="badge badge-pill badge-success">Accept</span></a></td>
		      <td><a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 2, 'idDog' => $item->idDog]) }}" "><span class="badge badge-pill badge-danger">Denny</span></a></td>
		    </tr>

		  </tbody>
		  	
		  @endforeach
		
	@endif

@stop
