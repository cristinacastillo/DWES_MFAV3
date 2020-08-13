@extends('layouts.plantilla')
@section('cuerpo')

<div class="container">

	<div id="tittle" class="row">

		<div class="col-sd-12 mx-auto text-center">


			@if($dog)

				<h1>{{ $dog->name }}</h1>


				@if (session('message') == __('messages.update'))
					<div class="row mt-2">
						<div class="col">
							<div class="alert alert-success text-center" role="alert">
								{{ session('message') }}
							</div>
						</div>
					</div>
				@endif

		</div>

	</div>

	<hr>

	<div class="cotntainer">

		@if(Auth::user()->profile == 1)

			<div class="row">

				<div class="col-sm-12 ">

					<span class="badge badge-danger float-right badgeDel" data-toggle="modal" data-target="#exampleModalDelete">Delete dog</span>

				</div>
			</div>	

		@endif

		<div class="row">

			<div class="col-sm-6 ">



				<div id="foto">			
					<img class="dogView" src="{{ asset('/storage/dogs') }}/{{ $dog->photo }}"src="{{ asset('/img/dogs') }}/{{ $dog->photo }}"
									    alt="{{ $dog->name }}">
				</div>	

				@if(Auth::user()->profile == 1)

					<span onclick="showForm('photoP','editablePho')" class="editar fa fa-camera" type="button" class="btn btn-link badge badge-pill badge-warning"></span>

					<div id="editablePho">
						<form method="POST" action="{{ route('dog.edit') }}" enctype="multipart/form-data">
							@csrf

							<input type="hidden" name="idDog" value="{{ $dog->idDog }}">
							<input class="" type="file" name="photo" accept="image/png, image/jpeg" multiple />

							<button class="save" type="submit"><span class="badge badge-pill badge-success">Save</span></button>
							<button class="cancel"  onclick="hideForm('photoP','editablePho')" type="button"><span class="badge badge-pill badge-danger">Cancel</span></button>

						</form>
					</div>

				@endif			

			</div>

			<div class="col-sm-6">

				<div class="row">

					<div class="col">

						<label class="col-form-label" for="name"><b>@lang('messages.lbname')</b></label>

						@if(Auth::user()->profile == 1)
							<span onclick="showForm('nameP','editableNam')" class="editar" type="button" class="btn btn-link badge badge-pill badge-warning">&#9998</span>
						@endif

						<p id="nameP">{{ $dog->name }}</p>

						<div id="editableNam">
							<form method="post" action="{{ route('dog.edit') }}">

								@csrf
								<input type="hidden" name="idDog" value="{{ $dog->idDog }}">
								<textarea id="name" name="name"  class="md-textarea form-control" rows="1" required>{{ $dog->name }}</textarea>
								<button class="save" type="submit"><span class="badge badge-pill badge-success">Save</span></button>
								<button class="cancel"  onclick="hideForm('nameP','editableNam')" type="button"><span class="badge badge-pill badge-danger">Cancel</span></button>

							</form>
						</div>

					</div>


					<div class="col">

						<label class="col-form-label" for="breed"><b>@lang('messages.lbbreed')</b></label>

						@if(Auth::user()->profile == 1)
							<span onclick="showForm('breedP','editableBre')" class="editar" type="button" class="btn btn-link badge badge-pill badge-warning">&#9998</span>
						@endif

						<p id="breedP">{{ $dog->breed }}</p>

						<div id="editableBre">
							<form method="post" action="{{ route('dog.edit') }}">

								@csrf
								<input type="hidden" name="idDog" value="{{ $dog->idDog }}">
								<textarea id="breed" name="breed"  class="md-textarea form-control" rows="1" required>{{ $dog->breed }}</textarea>
								<button class="save" type="submit"><span class="badge badge-pill badge-success">Save</span></button>
								<button class="cancel"  onclick="hideForm('breedP','editableBre')" type="button"><span class="badge badge-pill badge-danger">Cancel</span></button>

							</form>
						</div>
					</div>


				</div>

				<div class="row">

					<div class="col">

						<label class="col-form-label" for="gender"><b>@lang('messages.lbgender')</b></label>

						@if(Auth::user()->profile == 1)
							<span onclick="showForm('genderP','editableGen')" class="editar" type="button" class="btn btn-link badge badge-pill badge-warning">&#9998</span>
						@endif

						<p id="genderP">{{ $dog->gender }}</p>

						<div id="editableGen">
							<form method="post" action="{{ route('dog.edit') }}">

								@csrf
								<input type="hidden" name="idDog" value="{{ $dog->idDog }}">
								<textarea id="gender" name="gender"  class="md-textarea form-control" rows="1" required>{{ $dog->gender }}</textarea>
								<button class="save" type="submit"><span class="badge badge-pill badge-success">Save</span></button>
								<button class="cancel"  onclick="hideForm('genderP','editableGen')" type="button"><span class="badge badge-pill badge-danger">Cancel</span></button>

							</form>
						</div>

					</div>



					<div class="col">

						<label class="col-form-label" for="birthdate"><b>@lang('messages.lbbirthdate')</b></label>

						@if(Auth::user()->profile == 1)
							<span onclick="showForm('birthdateP','editableBir')" class="editar" type="button" class="btn btn-link badge badge-pill badge-warning"> &#9998</span>
						@endif

						<p id="birthdateP">@dateFormat($dog)</p>

						<div id="editableBir">
							<form method="post" action="{{ route('dog.edit') }}">

								@csrf
								<input type="hidden" name="idDog" value="{{ $dog->idDog }}">

								<input class="form-control" type="date" name="birthdate" required />

								<button class="save" type="submit"><span class="badge badge-pill badge-success">Save</span></button>

								<button class="cancel"  onclick="hideForm('birthdateP','editableBir')" type="button"><span class="badge badge-pill badge-danger">Cancel</span></button>

							</form>
						</div>
					</div>

				</div>

				<div class="row">

					<div class="col">

						<label class="col-form-label" for="descripcion"><b>@lang('messages.lbdescription')</b></label>

						@if(Auth::user()->profile == 1)
							<span onclick="showForm('descriptionP','editableDes')" class="editar" type="button" class="btn btn-link badge badge-pill badge-warning"> &#9998</span>
						@endif

						<p id="descriptionP">{{ $dog->description }}</p>

						<div id="editableDes">
							<form method="post" action="{{ route('dog.edit') }}">

								@csrf
								<input type="hidden" name="idDog" value="{{ $dog->idDog }}">

								<textarea name="description"  class="md-textarea form-control" rows="7" required>{{ $dog->description }}</textarea>

								<button class="save" type="submit"><span class="badge badge-pill badge-success">Save</span></button>

								<button class="cancel"  onclick="hideForm('descriptionP','editableDes')" type="button"><span class="badge badge-pill badge-danger">Cancel</span></button>

							</form>
						</div>
					</div>

					

					@if (count($errors) > 0)
		                <div class="alert alert-danger">
		                   	<ul>
		                     @foreach ($errors->all() as $error)
		                       <li>{{ $error }}</li>
		                     @endforeach
		                   	</ul>
		                </div>
		            @endif


				</div>
			</div>

		</div>

		<br>

		<div class="row">
			<div class="col-sm-6 ">

				@if($dog->status == 1)
					<p>ya adoptatado</p>
				@else
					@if($comp)

					<div class="alert alert-primary alertDog" role="alert">
					  You have already applied for the adoption of this dog
					</div>

					@elseif (!$comp)
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
					  Request Adoption
					</button>

					@endif
				@endif
			</div>
		</div>

<!---------- COMENTARIOS ---------->

		<div class="row">

			<div class="col-sm-12">

				<br>
	
				<h4 class="text-center"><b>Comments about {{ $dog->name }}</b></h4>

				@if (session('message') == __('messages.deleteComment'))
					<div class="row mt-2">
						<div class="col">
							<div class="alert alert-success text-center" role="alert">
								{{ session('message') }}
							</div>
						</div>
					</div>
				@endif

				<!-- Button trigger modal -->
				<span class="badge badgeCom" data-toggle="modal" data-target="#exampleModalCenter">Add new comment</span>

				<br>

				@if(!$comment->isEmpty())

					@foreach($comment as $item)
						<hr>

						<!-- Media Comments -->

						
						<div class="media myMedia">

							<img src="{{ asset('/storage/users') }}/{{ $item->photo }}" class="mr-3 iconComment" alt="..."><br>


							<div class="media-body">

								<span class="dateCom">@dateFormatC($item)</span>

							
								<span class="mt-0 spanName">{{ $item->name }} {{ $item->surnames }}</span>

								@if(auth()->user()->idUse == $item->idUse)

								
									<!--dropdown-->
						
									<div class="dropdown">

										<i class="badge badgeCom dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf0c6;</i>

										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<span onclick="showForm('{{$item->idCom}}','editableCom{{$item->idCom}}')" class="dropdown-item">Edit comment</span>
											<a class="dropdown-item" data-toggle="modal" data-target="#ModalDeleteComment">Delete comment</a>
											
										</div>

									</div>

									<!--<span onclick="showForm('{{$item->idCom}}','editableCom{{$item->idCom}}')">
										<img src="{{ asset('/img/escritura.svg') }}" style="width: 25px" alt="edit" class="spanED">
									</span> |
									<!--<a class="deleteButton spanED"><img src="{{ asset('/img/eliminar.svg') }}" style="width: 28px" alt="bin"></a>-->


									<p id="{{$item->idCom}}" class="commentP">{{ $item->comment }}</p>



									<!--DELETE MODAL
									<div class="col-sm-6">

										<div class="alert alert-danger deleteModal" role="alert">
											<p>Are you sure you want to delete this item?</p>


											<form name="delete" method="post" action="{{ route('delete.comment') }}">
												@csrf
												<input type="hidden" name="idCom" value="{{ $item->idCom }}">
												<input type="hidden" name="idDog" value="{{ $item->idDog }}">
												<input type="hidden" name="comment" value="{{ $item->comment }}">
												<input type="hidden" name="idUse" value="{{ $item->idUse }}">
												<button class="delete" type="submit"><span class="badge badge-pill badge-danger">Delete</span></button>

											</form>

											<button class="cancel" type="button"><span class="badge badge-pill badge-dark">Cancel</span></button>

										</div>

									</div>-->


									<!-- Modal -->
									<div class="modal fade" id="ModalDeleteComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Mi Fiel Amigo</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
											Are you sure you want to delete this comment?
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

									        <form name="delete" method="post" action="{{ route('delete.comment') }}">
												@csrf
												<input type="hidden" name="idCom" value="{{ $item->idCom }}">
												<input type="hidden" name="idDog" value="{{ $item->idDog }}">
												<input type="hidden" name="comment" value="{{ $item->comment }}">
												<input type="hidden" name="idUse" value="{{ $item->idUse }}">
												<button class="btn btn-danger" type="submit">Delete</button>

											</form>
									        
									      </div>
									    </div>
									  </div>
									</div>

									<div id="editableCom{{$item->idCom}}">

										<form action="{{ route('edit.comment') }}" method="post">
											@csrf
											<input type="hidden" name="idDog" value="{{ $item->idDog }}">
											<input type="hidden" name="idCom" value="{{ $item->idCom }}">

											<textarea name="comment"  class="md-textarea form-control " rows="1" required>{{ $item->comment }}</textarea>
											

											<button class="save" type="submit"><span class="badge badge-pill badge-success">Save</span></button>
											<button class="cancel"  onclick="hideForm('{{$item->idCom}}','editableCom{{$item->idCom}}')" type="button"><span class="badge badge-pill badge-danger">Cancel</span></button>
										</form>

									</div>
								@else
									<p class="commentP comment">{{ $item->comment }}</p>
								@endif


							</div>
						</div>

						<!---Close Media---->


					@endforeach

					<div class="row float-right">

						{{ $comment->links() }}

					</div>

				@else

				<p>No hay comentarios sobre {{ $dog->name }}</p>

				@endif


		</div>


			<!-- Modal Comments-->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Add New Comment About {{ $dog->name }}</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">

			        <form method="post" action="{{ route('add.comment') }}">

						@csrf


					    <!-- comment -->
					    <div class="row form-group">
					        <div class="col-md-6 mx-auto">

					        	<input type="hidden" name="idUse" value="{{ auth()->user()->idUse }}">
								<input type="hidden" name="idDog" value="{{ $dog->idDog }}">

					            <label class="col-form-label" for="comment">Comment:</label>
					            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name="comment" required></textarea>

					        </div>
					    </div>




			      </div>
				      <div class="modal-footer">
				      	<button class="btn btn-primary" type="submit">Send</button>
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>

			      </form>
			    </div>
			  </div>
			</div>

			<!--@if($errors)
				<div class="row">
					<div class="col">
						{{ $errors->first('comment') }}
					</div>
				</div>
			@endif-->
	<!-------------------------------->

			</div>
		</div>


		<!-- Modal Adoption-->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content">
			      	<div class="modal-header">
			        	<h5 class="modal-title" id="exampleModalLongTitle">Request Adoption</h5>
			        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          		<span aria-hidden="true">&times;</span>
			        	</button>
			     	</div>
					<div class="modal-body">
						<form method="post" action="{{ route('dog.req') }}">

							@csrf

							<div class="row form-group">
						        <div class="col-md-6 mx-auto">
						            <h5>Introduzca los datos siguientes</h5>
						        </div>
							</div>


						    <!-- reason -->
						    <div class="row form-group">
						        <div class="col-md-6 mx-auto">

						        	<input type="hidden" name="idUse" value="{{ auth()->user()->idUse }}">
									<input type="hidden" name="idDog" value="{{ $dog->idDog }}">

						            <label class="col-form-label" for="reason">Reason:</label>
						            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name="reason" required></textarea>
						        </div>
						    </div>

						    <!--@if($errors)
							<div class="row">
								<div class="col">
									{{ $errors->first('reason') }}
								</div>
							</div>
							@endif-->

							<div class="row form-group">
						        <div class="col-md-6 mx-auto">

						        	<button class="btn btn-primary" type="submit">Send</button>

						        </div>
					    	</div>
						</form>
					</div>
				</div>
			</div>

			@endif
		</div>



		<!-- Modal Delete-->
		<div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Mi Fiel Amigo</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						Are you sure you want to delete this dog?
						<form method="post" action="{{ route('dog.delete') }}">
							@csrf
							<input type="hidden" name="idDog" value="{{ $dog->idDog }}">
							<input type="hidden" name="idUse" value="auth()->user()->idUse">

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</div>

				</div>
			</div>
		</div>



	</div>
</div>

@stop
