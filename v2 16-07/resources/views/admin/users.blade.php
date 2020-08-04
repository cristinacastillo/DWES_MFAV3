@extends('layouts.plantilla')
@section('cuerpo')

<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>Users List</h1>


<div class="row mt-2 container-fluid divIndex" >
    <div class="col">

        <input id="search" type="text" class="form-control" placeholder="Busca aquí cualquier usuario" name="search"><br/>

        <table id="results" class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col" class="sizeTittle">Título</th>
                    <th scope="col">Última modificación</th>
                </tr>
            </thead>
            <div id="aviso" class="mx-auto"></div>
            <div id="success" class="mx-auto"></div>

            <tbody id="ajax">
              <!-- Body of AJAX table here-->
            <tbody>

            <tbody id="index">
              @foreach($users as $item)
                <tr>
                    
                    <td><a href="{{ route('user.info', ['id' => $item->idUse]) }}">{{ $item->name }} {{ $item->surnames }}</a></td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
