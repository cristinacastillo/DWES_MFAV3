@extends('layouts.plantilla')
@section('cuerpo')
	
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<div class="row">

		<div class="col-sm-6 mt-4">
			<div class="list-group" id="list-tab" role="tablist">
		      <a class="list-group-item list-group-item-action active" id="list-userprof-list" data-toggle="list" href="#list-userprof" role="tab" aria-controls="userprof">User Profile Data</a>

		      <a class="list-group-item list-group-item-action" id="list-chgpass-list" data-toggle="list" href="#list-chgpass" role="tab" aria-controls="chgpass">Change Password</a>

		      <a class="list-group-item list-group-item-action" id="list-adoptions-list" data-toggle="list" href="#list-adoptions" role="tab" aria-controls="adoptions">Adoptions</a>

		      <a class="list-group-item list-group-item-action" id="list-pending-list" data-toggle="list" href="#list-pending" role="tab" aria-controls="pending">Pending doptions</a>

		      <a class="list-group-item list-group-item-action" id="list-deleteaccount-list" data-toggle="list" href="#list-deleteaccount" role="tab" aria-controls="deleteaccount">Delete Account</a>

			</div>
			
			<div class="clearSpace"></div>
		</div>
		

		<div class="col-sm-6 ">
			<div class="tab-content" id="nav-tabContent">

				@if (count($errors) > 0)
	                <div class="alert alert-danger mt-4">
	                   	<ul>
	                     @foreach ($errors->all() as $error)
	                       <li>{{ $error }}</li>
	                     @endforeach
	                   	</ul>
	                </div>
	            @endif

	            @if (session('message') )
					<div class="row mt-4">
						<div class="col">
							<div class="alert alert-success text-center" role="alert">
								{{ session('message') }}
							</div>
						</div>
					</div>
				@endif


				{{-- USER PROFILE DATA --}}
			    <div class="tab-pane fade show active" id="list-userprof" role="tabpanel" aria-labelledby="list-userprof-list">

					<div class="col sd-12">
				      	{{--<h2 class="text-center mt-4">User Profile Data</h2>--}}

				      	<div class="card  mt-4 cardUserReq">

							<img src="{{ asset('/storage/users') }}/{{ auth()->user()->photo }}" class="card-img-top mx-auto mt-4 imgUser" alt="{{ auth()->user()->name }} {{auth()->user()->surnames}}">

							<div class="card-body">
								<span class="badge myBadge">Name</span>
								<p class="text-center ml-1" >{{ auth()->user()->name }}</p>

								<span class="badge myBadge">Surnames</span>
								<p class="text-center ml-1" >{{ auth()->user()->surnames }}</p>

								<span class="badge myBadge">E-mail</span>
								<p class="text-center ml-1" >{{ auth()->user()->email }}</p>

								<span class="badge myBadge">Phone Number</span>
								<p class="text-center ml-1" >{{ auth()->user()->phoneNumber }}</p>

								<br>
						

								<button type="button" class="myButton" data-toggle="modal" data-target="#exampleModal">
									Change user data
								</button>

								{{-- MODAL EDIT PROFILE DATA --}}

								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        
								        <h2 class="ml-4 mt-4 text-center">MODIFY USER DATA</h2>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body formProfile">


								      		<form method="post" action="{{ route('user.edit') }}" class="myForm formDog" enctype="multipart/form-data">

			        						@csrf

			        						<input type="hidden" name="idUse" value="{{ auth()->user()->idUse }}">
										
											<div class="field">

												<input type="text" name="name" class="myInput myInputFill" value="{{ auth()->user()->name }}"  autocomplete="name" autofocus required>
				           						<label class="myLabel" for="name">@lang('messages.lbname')</label>

				           						

											</div>

											<div class="field">

												<input type="text" name="surnames" class="myInput" autocomplete="surnames" autofocus required value="{{ auth()->user()->surnames }}">
				           						<label class="myLabel" for="surnames">@lang('messages.lbsurnames')</label>

				           						

											</div>

											<div class="field">

												<input type="text" name="phoneNumber" class="myInput" value="{{ auth()->user()->phoneNumber }}"  autocomplete="phoneNumber" autofocus required>
				           						<label class="myLabel" for="phoneNumber">@lang('messages.lbphoneNumber')</label>


											</div>


											<div class="field">
            
									            <input type="file" name="photo" class="myInput inputPhoto" value=""  autocomplete="photo" accept="image/png, image/jpeg" multiple >
									            <label class="myLabel" for="photo">@lang('messages.lbphoto')</label>

											</div>

										
								        
								      </div>
								      <div class="modal-footer">
								        {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
								        <button type="submit" class="myButton">Save changes</button>

								        </form>
								      </div>
								    </div>
								  </div>
								</div>

								{{----}}


							</div>

						</div>

					</div>

					
			    </div>


			    {{-- CHANGE PASSWORD --}}
			    <div class="tab-pane fade" id="list-chgpass" role="tabpanel" aria-labelledby="list-chgpass-list">

			      	<div class="col">
				      	<h2 class="text-center mt-4">Change Password</h2>

				      	<div class="formChangePass">
							  <form class="myForm" method="POST" role="form" action="{{ route('user.chgpass') }}">
								
							{{-- @if (count($errors) > 0)
				                 <div class="alert alert-danger">
				                   <ul>
				                     @foreach ($errors->all() as $error)
				                       <li>{{ $error }}</li>
				                     @endforeach
				                   </ul>
				                 </div>
				               @endif --}}

				               @csrf

				               {{-- Current password --}}

				               <div class="field{{ $errors->has('current_password') ? ' has-error' : '' }}">

				               		<input id="current_password" type="password" class="myInput" name="current_password" required autofocus>

				                 	<label for="current_password" class="myLabel">Current Password</label>

				                   {{-- @if ($errors->has('current_password'))
				                     <span class="help-block">
				                     <strong>{{ $errors->first('current_password') }}</strong>
				                   </span>
				                   @endif --}}
				                 

				               </div>


				               {{-- New password --}}

				               <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">

					               	<input id="password" type="password" class="myInput" name="password" required>
					                <label for="password" class="myLabel">New Password</label>
				                   
				                  {{-- @if ($errors->has('password'))
				                     <span class="help-block">
				                     <strong>{{ $errors->first('password') }}</strong>
				                   </span>
				                   @endif--}}
				                 
				               </div>


				               {{-- Confirm new password --}}

				               <div class="field">

				               		<input id="password-confirm" type="password" class="myInput" name="password_confirmation" required>
				                	<label for="password-confirm" class="myLabel">Confirm Password</label>
				                 
				               </div>


				               {{-- Submit button --}}

				               <div class="field">
				            
				                   <button type="submit" class="myButton">
				                     Change password
				                   </button>

				               </div>


			             	</form>
			             </div>
					 </div>

					 
			    </div>
			    

	 			{{-- ADOPTIONS --}}
			    <div class="tab-pane fade mt-4" id="list-adoptions" role="tabpanel" aria-labelledby="list-adoptions-list" >

			    	<div class="col">
			    		@if(!$adops->isEmpty())
		                    @foreach($adops as $adop)
		                        
		                            <div class="media mediaUser p-4">
		                                <img src="{{ asset('/storage/dogs') }}/{{ $adop->photo }}" class="mr-3 photoDogUser" alt="...">
		                                <div class="media-body">
		                                	<h5 class="mt-0"><b>{{ $adop->name }}</b></h5>
		                                    <h5 class="mt-0"><b></b></h5>
		                                    <label><b>Breed:</b></label>
		                                    <span>{{ $adop->breed }}</span>
		                                    <label><b>Date adoption:</b></label>
		                                    <span>@dateFormat($adop)</span>
		                                </div>
		                            </div>
		                       

		                    @endforeach
	                	@else

	                    <div class="alert alert-dark mt-4" role="alert">
	                      There are no adoptions yet.

	                    </div>

	                @endif

			    	</div>

	
			    </div>


			    {{-- PENDING ADOPTIONS --}}
			    <div class="tab-pane fade mt-4" id="list-pending" role="tabpanel" aria-labelledby="list-pending-list">

			    	<div class="col">
			    		@if(!$requests->isEmpty())
		                    @foreach($requests as $req)
		                        
		                            <div class="media mediaUser p-4">
		                                <img src="{{ asset('/storage/dogs') }}/{{ $req->photo }}" class="mr-3 photoDogUser" alt="...">
		                                <div class="media-body">
		                                    <h5 class="mt-0"><b><a href="{{ route('dog.info', ['id' => $req->idDog]) }}">{{ $req->name }}</a></b></h5>
		                                    <label><b>Breed:</b></label>
		                                    <span>{{ $req->breed }}</span>
		                                    <label><b>Date adoption:</b></label>
		                                    <span>@dateFormatA($req)</span> <br>
		                                    
		                                    <a href="{{ route('adop.delete', ['idAdop' => $req->idAdop, 'idUse' => $req->idUse]) }}" "><span class="badge badge-pill badge-danger">Cancel requet</span></a>
		                                </div>
		                            </div>
		                        

		                    @endforeach
		                @else

		                    <div class="alert alert-dark mt-4" role="alert">
		                      There are no adoptions yet.

		                    </div>

		                @endif

					</div>
	

			    </div>





				{{-- DELETE ACCOUNT --}}
			    <div class="tab-pane fade" id="list-deleteaccount" role="tabpanel" aria-labelledby="list-deleteaccount-list">

			      	<div class="alert alert-dark mt-4" role="alert">
						<b>When you unsubscribe, all your personal data and all those related to dogs will be deleted.<b>
					</div>

				    {{-- The Modal --}}
				    <div id="myModal" class="modal">
				        {{-- Modal content --}}
				        <div class="mymodal-content">
				            <div class="mymodal-header">
				                <span class="close">&times;</span>
				                <h3>Mi Fiel Amigo</h3>
				            </div>
				            <div class="mymodal-body">
				                Are you sure you want to unsubscribe from <i>'Mi Fiel Amigo'</i> ?
				                <form method="post" action="{{ route('user.deleteAcc') }}">
				                	@csrf
				                	<input type="hidden" id="idUse" name="idUse" value="{{ auth()->user()->idUse }}">
				                	<button type="submit" class="btn btn-danger">Yes, I'm sure</button>
				            	</form>
				            </div>
				            <div class="mymodal-footer">
				            </div>
				        </div>

				   </div>

				    {{-- button to open modal --}}
					<button id="myBtn" type="button" class="btn btn-danger">Unsubscribe</button>

			    </div>

			</div>


		</div>
	</div>

	
@stop
