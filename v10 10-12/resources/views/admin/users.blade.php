@extends('layouts.plantilla')
@section('cuerpo')

    <h1 class="text-center">Admin Zone <br> </h1>
    <h5 class="float-right h5F">Name: <b>{{ Auth::user() }}</b></h5><br>
    <hr>

    <section class="reqs">

        @if (session('message'))
            <div class="row mt-2">
                <div class="col">
                    <div class="alert alert-success text-center adminAlert" role="alert">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        @endif

        <div class="row text-center">
            <div class="col text-center">



                <h2 class="mt-4 mb-4 text-center">USER LIST</h2>


                <input id="search" type="text" class="myInput mt-4 inputUsers" placeholder="Search here for any user"
                    name="search"><br>


                <table id="results" class="table table-borderless">

                    <div id="aviso" class="mx-auto"></div>

                    <tbody id="ajax">
                        <!-- Body of AJAX users here-->
                    <tbody>

                    <tbody id="index">
                        @foreach ($users as $item)
                            <tr>
                                <td><a href="{{ route('user.info', ['id' => $item->idUse]) }}">{{ $item->name }}
                                        {{ $item->surnames }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="row">
                    <div class="mx-auto ">
                        {{ $users->links() }}
                    </div>
                </div>


            </div>
        </div>

        <div class="clearSpace2"></div>


    @stop
