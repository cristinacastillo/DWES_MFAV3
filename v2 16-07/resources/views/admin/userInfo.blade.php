@extends('layouts.plantilla')
@section('cuerpo')

<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>Users Info</h1>


    <div class="container">
        <div class="row">
            <div class="col ">

                @if($user)


                <!-- button to open modal -->
                <button id="myBtn" type="button" class="btn btn-danger btnA">Unsubscribe</button>

                <div class="card  mt-4 cardUserReq">


                    <img src="{{ asset('/storage/profiles') }}/{{ auth()->user()->photo }}" class="card-img-top mx-auto mt-4 imgUser" alt="{{ auth()->user()->name }} {{auth()->user()->surnames}}">

                    <div class="card-body">
                        <span class="badge myBadge">Name</span>
                        <p class="text-center ml-1" >{{ $user->name }}</p>

                        <span class="badge myBadge">Surnames</span>
                        <p class="text-center ml-1" >{{ $user->surnames }}</p>

                        <span class="badge myBadge">E-mail</span>
                        <p class="text-center ml-1" >{{ $user->email }}</p>

                        <span class="badge myBadge">Phone Number</span>
                        <p class="text-center ml-1" >{{ $user->phoneNumber }}</p>

                        <br>
                       
                    </div>

                </div>

            </div>
        </div>

        <div class="row mt-4">

            <div class="col-sm-6">
                <h3> Dogs adopted from {{ $user->name }} </h3>

                @if(!$adops->isEmpty())
                    @foreach($adops as $adop)
                        @if($adop->status == 1)
                            <div class="media mediaUser p-4">
                                <img src="{{ asset('/storage/dogs') }}/{{ $adop->photo }}" class="mr-3 photoDogUser" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0"><b><a href="{{ route('dog.info', ['id' => $adop->idDog]) }}">{{ $adop->name }}</a></b></h5>
                                    <label><b>Breed:</b></label>
                                    <span>{{ $adop->breed }}</span>
                                    <label><b>Date adoption:</b></label>
                                    <span>@dateFormatA($adop)</span>
                                </div>
                            </div>
                        @endif

                    @endforeach
                @else

                    <div class="alert alert-dark" role="alert">
                      There are no adoptions yet.

                    </div>

                @endif
                

            </div>

            <div class="col-sm-6">
                <h3> Pending adoptions from {{ $user->name }} </h3>

                @if(!$adops->isEmpty())
                    @foreach($adops as $adop)
                        @if($adop->status == 0)
                            <div class="media mediaUser p-4">
                                <img src="{{ asset('/storage/dogs') }}/{{ $adop->photo }}" class="mr-3 photoDogUser" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0"><b><a href="{{ route('dog.info', ['id' => $adop->idDog]) }}">{{ $adop->name }}</a></b></h5>
                                    <label><b>Breed:</b></label>
                                    <span>{{ $adop->breed }}</span>
                                    <label><b>Date adoption:</b></label>
                                    <span>@dateFormatA($adop)</span> <br>
                                    <a href="{{ route('adop.status', ['idAdop' => $adop->idAdop, 'value' => 1, 'idDog' => $adop->idDog]) }}" "><span class="badge badge-pill badge-success">Accept</span></a>
                                    <a href="{{ route('adop.status', ['idAdop' => $adop->idAdop, 'value' => 2, 'idDog' => $adop->idDog]) }}" "><span class="badge badge-pill badge-danger">Denny</span></a>
                                </div>
                            </div>
                        @endif

                    @endforeach
                @else

                    <div class="alert alert-dark" role="alert">
                      There are no adoptions yet.

                    </div>

                @endif
                

            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="mymodal-content">
                    <div class="mymodal-header">
                        <span class="close">&times;</span>
                        <h3>Mi Fiel Amigo</h3>
                    </div>
                    <div class="mymodal-body">
                        Are you sure you want to unsubscribe this user from <i>'Mi Fiel Amigo'</i> ?
                        <form method="post" action="{{ route('user.deleteAcc') }}">
                            @csrf
                            <input type="hidden" id="idUse" name="idUse" value="{{ $user->idUse }}">
                            <button type="submit" class="btn btn-danger">Yes, I'm sure</button>
                        </form>
                    </div>
                    <div class="mymodal-footer">
                    </div>
                </div>

            </div>

            @endif

        </div>
    </div>


    

@stop
