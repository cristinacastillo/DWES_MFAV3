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
            <div class="col text-center formDogDiv">

                <h2 class="mt-4 text-center">NEW DOG</h2>

                <form method="post" action="{{ route('dog.add') }}" class="myForm formDog" enctype="multipart/form-data">

                    @csrf

                    <div class="field">

                        <input type="text" name="name" class="myInput" value="{{ old('name') }}" autocomplete="name"
                            autofocus required>
                        <label class="myLabel" for="name">@lang('messages.lbname')</label>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="field">

                        <input type="text" name="breed" class="myInput" value="{{ old('breed') }}" autocomplete="breed"
                            autofocus required>
                        <label class="myLabel" for="name">@lang('messages.lbbreed')</label>

                        @error('breed')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="field">

                        <input type="text" name="gender" class="myInput" value="{{ old('gender') }}" autocomplete="gender"
                            autofocus required>
                        <label class="myLabel" for="gender">@lang('messages.lbgender')</label>

                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="field">

                        <input type="date" name="birthdate" class="myInput inputBirth" value="{{ old('birthdate') }}"
                            autocomplete="birthdate" autofocus required>
                        <label class="myLabel" for="name">@lang('messages.lbbirthdate')</label>

                        @error('birthdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="field">

                        <textarea type="text" name="description" class="myInput" value="{{ old('description') }}"
                            autocomplete="description" autofocus required></textarea>
                        <label class="myLabel" for="description">@lang('messages.lbdescription')</label>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="field">

                        <input type="file" name="photo" class="myInput inputPhoto" value="{{ old('photo') }}"
                            autocomplete="photo" accept="image/png, image/jpeg" multiple required>
                        <label class="myLabel" for="photo">@lang('messages.lbphoto')</label>

                        @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <button class="myButton" type="submit">Add Dog</button>

                </form>

            </div>
        </div>

    @stop
