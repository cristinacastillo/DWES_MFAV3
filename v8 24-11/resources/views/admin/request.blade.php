@extends('layouts.plantilla')
@section('cuerpo')


@if($adops)
	<h1>Requests</h1>
	

		
		<!--<table class="table">
		  <thead>
		    <tr>
		      <!--<th scope="col">idAdop</th>
		      <th scope="col">idUse</th>
		      <th scope="col">idDog</th>-->
		    <!-- <th scope="col">user</th>
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
		    <!-- <td><a href="{{ route('user.info',['id' => $item->idUse]) }}">{{ $item->nameUse }}</a></td>
		      <td>{{ $item->reason }}</td>
		      <td>{{ $item->dateAdop }}</td>
		      <td>{{ $item->nameDog }}</td>
		      <td><a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 1, 'idDog' => $item->idDog]) }}" "><span class="badge badge-pill badge-success">Accept</span></a></td>
		      <td><a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 2, 'idDog' => $item->idDog]) }}" "><span class="badge badge-pill badge-danger">Denny</span></a></td>
		    </tr>

		  </tbody>-->
		  	
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

			

   <div class="container">


       <!-- <div class="row ">
            <div class="col-12">
                <table id="example" class="table table-hover responsive nowrap myTable" style="width:100%">
                    <thead>
                        <tr class="myTr">
                            <th class="myTh">User Name</th>
                            <th class="myTh">Reason</th>
                            <th class="myTh">Date Request</th>
                            <th class="myTh">Name Dog</th>
                            <th class="myTh">Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                    	@foreach($adops as $item)
	                        <tr class="myTr">
	                            <td class="myTd">
	                                <a href="#">
	                                    <div class="d-flex align-items-center">
	                                        <div class="avatar avatar-blue mr-3"><img class="imgD" src="img2.jpg"></div>

	                                        <div class="">
	                                            <p class="font-weight-bold mb-0"><a href="{{ route('user.info',['id' => $item->idUse]) }}">{{ $item->nameUse }}</a></p>
	                                            <p class="text-muted mb-0">ethan-black@example.com</p>
	                                        </div>
	                                    </div>
	                                </a>
	                            </td>
	                            <td class="myTd tdReason">{{ $item->reason }}</td>
	                            <td class="myTd">{{ $item->dateAdop }}</td>
	                            <td class="myTd">{{ $item->nameDog }}</td>
	                            <td class="myTd">
	                                <div class="badge badge-success badge-success-alt myBadge">Enabled</div><br>
	                                <div class="badge badge-success badge-success-alt myBadge">Enabled</div>
	                            </td>
	                            <td class="myTd">
	                                <div class="dropdown">
	                                    <button class="btn btn-sm btn-icon myButton" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
	                              title="Actions"></i>
	                          </button>
	                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
	                                    	<p>{{ $item->reason }}</p>
	                                        <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
	                                        <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
	                                    </div>
	                                </div>
	                            </td>
	                        </tr>

	                    @endforeach
                        


                    </tbody>
                </table>
            </div>
        </div>-->
 <div class="row">

    <div class="col-sm-12  tableReq mx-auto">

      <input id="search2" type="text" class=myInput placeholder="Busca aquí cualquier usuario" name="search2">  
      
      <table class="myTable" id="result2">


          <div id="aviso2" class="mx-auto"></div>
          <div id="success2" class="mx-auto"></div>


        
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

          @foreach($adops as $item)
          <tr class="myTr">
            <td class="myTd" data-label="Account">{{ $item->nameUse }}</td>
            <td class="myTd" data-label="Due Date">{{ $item->dateAdop }}</td>
            <td class="myTd" data-label="Amount">{{ $item->reason }}</td>
            <td class="myTd" data-label="Amount">{{ $item->nameDog }}</td>
            <td class="myTd" data-label="Period">
              <a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 1, 'idDog' => $item->idDog]) }}" "><span class="badge badge-pill badge-success">Accept</span></a>
              <a href="{{ route('adop.status', ['idAdop' => $item->idAdop, 'value' => 2, 'idDog' => $item->idDog]) }}" "><span class="badge badge-pill badge-danger">Denny</span></a>
            </td>
          </tr>

          @endforeach
          
        </tbody>
      </table>
    </div>
    
  </div>

    <!--<div class="container text-center">
        <div class="row py-5">
            <div class="col-12">
                <h6 class="small text-danger">Currently I'm just experimenting with this stuff, so there might be lots of redundant CSS.</h6>
            </div>
        </div>
    </div>-->






@stop
