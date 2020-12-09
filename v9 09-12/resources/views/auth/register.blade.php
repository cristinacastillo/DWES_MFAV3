@extends('layouts.plantilla')

@section('cuerpo')

<div class="container">
    <div class="row justify-content-center mx-auto">
        <div class="col-md-8 ">
            
            
            <div class="card mx-auto">
                <img src="{{ asset('/img/logocom.svg') }}" alt="">
                

                <div class="card-body">

                <div class="row">
    
                    <div class="col-sm-6 mx-auto ">
                        <form method="POST" class="myForm" action="{{ route('register') }}">
                            @csrf


                            <div class="field ">
                
                                <input id="name" type="text" name="name" class="myInput @error('name') is-invalid @enderror" value="{{ old('name') }}"  autocomplete="name" autofocus required>
                                <label class="myLabel" for="name">{{ __('Name') }}</label>

                                @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror

                            </div>


                            <div class="field ">
                
                                <input id="surnames" type="text" name="surnames" class="myInput @error('surnames') is-invalid @enderror" value="{{ old('surnames') }}"  autocomplete="surnames" autofocus required>
                                <label class="myLabel" for="surnames">{{ __('Surnames') }}</label>

                                @error('surnames')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror

                            </div>

                            <div class="field ">
                
                                <input id="phoneNumber" type="text" name="phoneNumber" class="myInput @error('surnames') is-invalid @enderror" value="{{ old('phoneNumber') }}"  autocomplete="phoneNumber" autofocus required>
                                <label class="myLabel" for="phoneNumber">{{ __('PhoneNumber') }}</label>

                                @error('phoneNumber')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror

                            </div>

                            <div class="field ">
                
                                <input id="email" type="text" name="email" class="myInput @error('email') is-invalid @enderror" value="{{ old('email') }}"  autocomplete="email" autofocus required>
                                <label class="myLabel" for="email">{{ __('Email') }}</label>

                                @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror

                            </div>


                            <div class="field ">
                
                                <input id="password" type="password" name="password" class="myInput @error('password') is-invalid @enderror" value="{{ old('password') }}"  autocomplete="password" autofocus required>
                                <label class="myLabel" for="password">{{ __('Password') }}</label>

                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror

                            </div>

                            <div class="field ">
                
                                <input id="password-confirm" type="password" name="password_confirmation" class="myInput" autocomplete="new-password" autofocus required>
                                <label class="myLabel" for="password-confirm">{{ __('Confirm Password') }}</label>

                                

                            </div>
                           
                                <button type="submit" class="myButton">
                                    {{ __('Register') }}
                                </button>
                                
                        </form>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
