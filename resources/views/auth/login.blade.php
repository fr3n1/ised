@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-lg-5" style="margin-top: 100px; ">
         <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" >{{ __('E-Mail') }}</label>

                           
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="@anhembimorumbi.edu.br" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" >{{ __('Senha') }}</label>

                           
                               
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group row mb-0">
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    
                                @endif
                            
                        </div>
                    </form>
                
         </div>
        
    </div>
</div>
@endsection
