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



        <div class="row">

            <div class="col-sm-12  tableReq mx-auto">

                <h2 class="mt-4 text-center">REQUESTS</h2>

                <input id="search2" type="text" class=myInput placeholder="Search here for any request" name="search2">


                <table class="myTable" id="result2">

                    <thead class="myThead">
                        <tr class="myTr">
                            <th class="myTh" scope="col">User Name</th>
                            <th class="myTh" scope="col">Date Request</th>
                            <th class="myTh" scope="col">Reason</th>
                            <th class="myTh" scope="col">Name Dog</th>
                            <th class="myTh" scope="col">Status</th>
                        </tr>
                    </thead>

                    <tbody id="ajax2">
                        <!-- Body of AJAX table here-->
                    <tbody>

                    <tbody id="index2">



                        @foreach ($adops as $item)
                            <tr class="myTr">
                                <td class="myTd" data-label="Name User"><a
                                        href="{{ route('user.info', ['id' => $item->idUse]) }}">{{ $item->nameUse }}</a>
                                </td>
                                <td class="myTd" data-label="Date Request">{{ $item->dateAdop }}</td>
                                <td class="myTd" data-label="Reason">{{ $item->reason }}</td>
                                <td class="myTd" data-label="Name Dog"><a
                                        href="{{ route('dog.info', ['id' => $item->idDog]) }}">{{ $item->nameDog }}</a></td>
                                <td class="myTd" data-label="Status">
                                    <a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 1, 'idDog' => $item->idDog]) }}" "><span class="
                                        badge badge-pill badge-success">Accept</span></a>
                                    <a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 2, 'idDog' => $item->idDog]) }}" "><span class="
                                        badge badge-pill badge-danger">Denny</span></a>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>

                <br>

                <div id="aviso2" class="mx-auto text-center"></div>

                <div class="row">
                    <div class="mx-auto">
                        {{ $adops->links() }}
                    </div>
                </div>

            </div>


        </div>

        <hr>

        <br>
        <br>


        <div class="clearSpace3">

    </section>

@stop
