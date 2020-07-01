@extends('layouts.plantilla')
@section('cuerpo')


@if($adops)
	<h1>Mis Adopciones Pendientes</h1>
	

		
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">idUse</th>
		      <th scope="col">idDog</th>
		      <th scope="col">reason</th>
		      <th scope="col">dateAdop</th>
		      <th scope="col">status</th>
		      <th scope="col">name</th>
		    </tr>
		  </thead>
		  @foreach($adops as $item)
		  	@if($item->status != 1)
		  <tbody>
		    <tr>
		      <td>{{ $item->idUse }}</td>
		      <td>{{ $item->idDog }}</td>
		      <td>{{ $item->reason }}</td>
		      <td>{{ $item->dateAdop }}</td>
		      @if($item->status == 0)
		      <td><span class="badge badge-pill badge-primary">Pending</span></td>
		      @else
		      <td><span class="badge badge-pill badge-danger">Denied</span></td>
		      @endif
		      <td>{{ $item->name }}</td>  
		    </tr>

		  </tbody>
		  	@endif
		  @endforeach
		</table>
		<hr class='m-4'>

		<h1>Mis Adopciones </h1>
	
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">idUse</th>
		      <th scope="col">idDog</th>
		      <th scope="col">reason</th>
		      <th scope="col">dateAdop</th>
		      <th scope="col">status</th>
		      <th scope="col">name</th>
		    </tr>
		  </thead>
		  @foreach($adops as $item)
		  	@if($item->status == 1)
		  <tbody>
		    <tr>
		      <td>{{ $item->idUse }}</td>
		      <td>{{ $item->idDog }}</td>
		      <td>{{ $item->reason }}</td>
		      <td>{{ $item->dateAdop }}</td>
		      <td>{{ $item->status }}</td>
		      <td>{{ $item->name }}</td>  
		    </tr>

		  </tbody>
		  	@endif
		  @endforeach
		</table>
	@endif

@stop


