@extends('layouts.plantilla')
@section('cuerpo')


<h1>Administrador <br></h1> Bienvenid@, {{ Auth::user() }}<br>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  New Dog
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Dog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="{{ route('dog.add') }}"  enctype="multipart/form-data">

          @csrf

          <div class="row form-group">
            <div class="col-md-6 mx-auto">
                <h5>Introduzca los datos siguientes</h5>
            </div>
          </div>

          <!-- name-->
          <div class="row form-group">
              <div class="col-md-6 mx-auto">
                  <label class="col-form-label" for="name">Name:</label>
                  <input class="form-control" type="text" name="name" required />
              </div>
          </div>

        @if($errors)
    <div class="row">
      <div class="col">
        {{ $errors->first('name') }}
      </div>
    </div>
    @endif

        <!-- Breed-->
        <div class="row form-group">
            <div class="col-md-6 mx-auto">
                <label class="col-form-label" for="breed">Breed:</label>
                <input class="form-control" type="text" name="breed" required />
            </div>
        </div>

        @if($errors)
    <div class="row">
      <div class="col">
        {{ $errors->first('breed') }}
      </div>
    </div>
    @endif

        <!-- gender-->
        <div class="row form-group">
            <div class="col-md-6 mx-auto">
                <label class="col-form-label" for="gender">Gender:</label>
                <input class="form-control" type="text" name="gender" required />
            </div>
        </div>

        @if($errors)
    <div class="row">
      <div class="col">
        {{ $errors->first('gender') }}
      </div>
    </div>
    @endif

        <!-- description-->
        <div class="row form-group">
            <div class="col-md-6 mx-auto">
                <label class="col-form-label" for="description">Description:</label>
                <textarea class="form-control" type="text" name="description" required></textarea>

            </div>
        </div>

        @if($errors)
    <div class="row">
      <div class="col">
        {{ $errors->first('description') }}
      </div>
    </div>
    @endif

        <!-- birthdate -->
        <div class="row form-group">
            <div class="col-md-6 mx-auto">
                <label class="col-form-label" for="birthdate">Birthdate:</label>
                <input class="form-control" type="date" name="birthdate" required />
            </div>
        </div>

        @if($errors)
    <div class="row">
      <div class="col">
        {{ $errors->first('birthdate') }}
      </div>
    </div>
    @endif

        <!-- Photo -->
        <div class="row form-group">
            <div class="col-md-6 mx-auto">
                <label for="photo">Photo: </label>
                <input class="form-control" type="file" name="photo" accept="image/png, image/jpeg" multiple />
            </div>
        </div>

        @if($errors)
        <div class="row">
          <div class="col">
            {{ $errors->first('photo') }}
          </div>
        </div>
         @endif


        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Dog</button>
      </div>

      </form>
    </div>
  </div>
</div>


<a href="{{ route('adop.req') }}" class="btn btn-primary">Show Requests</a>

<a href="{{ route('users.list') }}" class="btn btn-primary">Users List</a>




@stop
