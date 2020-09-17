@extends('layouts.plantilla')
@section('cuerpo')


<h1 class="text-center">Admin Zone <br> </h1>
  <h5 class="float-right">Name: <b>{{ Auth::user() }}</b></h5><br>

<section>

  @if (session('message'))
    <div class="row mt-2">
      <div class="col">
        <div class="alert alert-success text-center" role="alert">
          {{ session('message') }}
        </div>
      </div>
    </div>
    @endif




  <a href="{{ route('adop.req') }}" class="btn btn-primary">Show Requests</a>



  <div class="row">
    
    <div class="col-sm-6 g ">

      <h2 class="mt-4 text-center">NEW DOG</h2>

      <form method="post" action="{{ route('dog.add') }}" class="myForm formDog" enctype="multipart/form-data">

        @csrf

        <div class="field">
            
            <input type="text" name="name" class="myInput" value="{{ old('name') }}"  autocomplete="name" autofocus required>
            <label class="myLabel" for="name">@lang('messages.lbname')</label>

            @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror

        </div>

        <div class="field">
            
            <input type="text" name="breed" class="myInput" value="{{ old('breed') }}"  autocomplete="breed" autofocus required>
            <label class="myLabel" for="name">@lang('messages.lbbreed')</label>

            @error('breed')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror

        </div>

        <div class="field">
            
            <input type="text" name="gender" class="myInput" value="{{ old('gender') }}"  autocomplete="gender" autofocus required>
            <label class="myLabel" for="gender">@lang('messages.lbgender')</label>

            @error('gender')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror

        </div>

        <div class="field">
            
            <input type="date" name="birthdate" class="myInput inputBirth" value="{{ old('birthdate') }}"  autocomplete="birthdate" autofocus required>
            <label class="myLabel" for="name">@lang('messages.lbbirthdate')</label>

            @error('birthdate')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror

        </div>

        <div class="field">
            
            <textarea type="text" name="description" class="myInput" value="{{ old('description') }}"  autocomplete="description" autofocus required></textarea>
            <label class="myLabel" for="description">@lang('messages.lbdescription')</label>

            @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror

        </div>


        <div class="field">
            
            <input type="file" name="photo" class="myInput inputPhoto" value="{{ old('photo') }}"  autocomplete="photo" accept="image/png, image/jpeg" multiple  required>
            <label class="myLabel" for="photo">@lang('messages.lbphoto')</label>

            @error('photo')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror

        </div>

        <button class="myButton" type="submit" >Add Dog</button>

      </form>


    </div>

    <div class="col-sm-6 g mx-auto">


      <h2 class="mt-4 mb-4 text-center">USER LIST</h2>


      <input id="search" type="text" class="myInput mt-4" placeholder="Search here for any user" name="search"><br>    


        <table id="results" class="table table-borderless">

         <!-- <thead>
              <tr>
                  <th scope="col" class="sizeTittle">User Name</th>
              </tr>
          </thead>-->

          <div id="aviso" class="mx-auto"></div>
          <!--<div id="success" class="mx-auto"></div>-->

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

        <div class="row">
          <div class="mx-auto ">
            {{ $users->links() }}
          </div>
        </div>

        

    </div>

  </div>

  <br>
  <br>

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
      <div id="aviso2" class="mx-auto text-center"></div>
    </div>
    
  </div>

  
</section>

@stop
