@extends('layouts.plantilla')

@section('cuerpo')



            <div class="card w-75 mt-4 mx-auto">
                <div class="card-header text-center">The session has expired, please re-enter your user data.</div>

                <div class="card-body">

                    <div class="row">
    
                        <div class="col-sm-6 mx-auto ">
                           <form class="myForm" method="POST" action="{{ route('login') }}">

                                @csrf
                                <div class="field">
                                    
                                    <input id="email" type="email" name="email" class="myInput @error('email') is-invalid @enderror"  value="{{ old('email') }}"  autocomplete="email" autofocus required>
                                    <label class="myLabel" for="email">Email</label>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                
                                <div class="field">

                                    <input id="password" type="password" name="password" class="myInput @error('password') is-invalid @enderror" autocomplete="current-password" required>
                                    <label class="myLabel" for="password">Password</label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <button class="myButton" type="submit" >Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


@endsection
