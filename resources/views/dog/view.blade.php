@extends('layouts.plantilla')
@section('cuerpo')

<div class="container">

	<div id="tittle" class="row">

		<div class="col-sd-12 mx-auto">



			@if($dog)

				<h1>{{ $dog->name }}</h1>

		</div>

	</div>

	<hr>

	<div class="cotntainer">

		<div class="row">

			<div class="col-sm-6 ">

				<div id="foto">
					<img class="perro" src="{{ asset('/storage/dogs') }}/{{ $dog->photo }}"src="{{ asset('/img/dogs') }}/{{ $dog->photo }}"
									    alt="{{ $dog->name }}">
				</div>

			</div>

			<div class="col-sm-6">

				<div class="row">

					<div class="col">

						<label class="col-form-label" for="name"><b>Nombre</b></label>
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
						@if($errors)
						    <div class="row">
						      <div class="col">
						        {{ $errors->first('name') }}
						      </div>
						    </div>
					    @endif
					</div>


					<div class="col">
						<label class="col-form-label" for="breed"><b>Raza</b></label>

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

						<label class="col-form-label" for="gender"><b>Género</b></label>

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

						<label class="col-form-label" for="birthdate"><b>Fecha de nacimiento</b></label>

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

						<label class="col-form-label" for="descripcion"><b>Descripción</b></label>

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


				</div>
			</div>

		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 ">

				@if($dog->status)
					<p>ya adoptatado</p>
				@else
					@if($comp)

					<p>Solcicitado</p>

					@elseif (!$comp)
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
					  Request Adoption
					</button>
					@endif
				@endif
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">

				<br>
	<!---------- COMENTARIOS ---------->
				<p><b>Comentarios de {{ $dog->name }}</b></p>

				<!-- Button trigger modal -->
				<a href="" title="" data-toggle="modal" data-target="#exampleModalCenter">Añadir nuevo comentario</a>


				@if(!$comment->isEmpty())

					@foreach($comment as $item)
						<hr>

						<div class="media">
						  <img src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-4/256/User-blue-icon.png" class="mr-3 iconComment" alt="...">
						  <div class="media-body">
						    <h5 class="mt-0">
						    	{{ $item->name }} {{ $item->surnames }}
						    	@if(auth()->user()->idUse == $item->idUse)

									<span onclick="showForm('{{$item->idCom}}','editableCom{{$item->idCom}}')">
										<img src="{{ asset('/img/escritura.svg') }}" style="width: 25px" alt="edit">
									</span> |
									<a class="deleteButton"><img src="{{ asset('/img/eliminar.svg') }}" style="width: 28px" alt="bin"></a>

									<p id="{{$item->idCom}}">{{ $item->comment }}</p>

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
							    	</div>

									<div id="editableCom{{$item->idCom}}">

										<form action="{{ route('edit.comment') }}" method="post">
											@csrf
											<input type="hidden" name="idDog" value="{{ $item->idDog }}">
											<input type="hidden" name="idCom" value="{{ $item->idCom }}">

								    		<textarea name="comment"  class="md-textarea form-control" rows="1" required>{{ $item->comment }}</textarea>
								    		<button class="save" type="submit"><span class="badge badge-pill badge-success">Save</span></button>
								    		<button class="cancel"  onclick="hideForm('{{$item->idCom}}','editableCom{{$item->idCom}}')" type="button"><span class="badge badge-pill badge-danger">Cancel</span></button>
								    	</form>

							    	</div>
							    @else
						    </h5>
						    		<p>{{ $item->comment }}</p>
						    	@endif
						  </div>
						</div>


					@endforeach

					{{ $comment->links() }}

				@else
				<p>No hay comentarios sobre {{ $dog->name }}</p>
				@endif


		</div>


			<!-- Modal -->
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
					            <input class="form-control" type="text" name="comment" required />

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

			@if($errors)
				<div class="row">
					<div class="col">
						{{ $errors->first('comment') }}
					</div>
				</div>
			@endif
	<!-------------------------------->

			</div>
		</div>


		<!-- Modal -->
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
						            <input class="form-control" type="text" name="reason" required />
						        </div>
						    </div>

						    @if($errors)
							<div class="row">
								<div class="col">
									{{ $errors->first('reason') }}
								</div>
							</div>
							@endif

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

	</div>
</div>

@stop
