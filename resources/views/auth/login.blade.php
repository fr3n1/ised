@extends('layouts.app')

@section('content')

    <div class="row ">
    	 <div class="col-5" style="margin-left: 110px" > <img src="storage/uam.png" class="float-left" alt="Paris"  width="350" height="80"> </div> 
        <div class="col-lg-7" style="margin-top: 50px; margin-left: 120px" >

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

                        <div class="form-group row "  height="200">
                            
                                <button class="button" type="submit" class="btn btn-primary" style="background-color:#8FC62C; margin-right: 10px">Estudante</button>
                                <button type="button" class="btn btn-primary" style="background-color:#8FC62C; margin-right: 10px">Professor</button>
                                <button type="button" class="btn btn-primary" style="background-color:#8FC62C">Coordenador</button>
                                @if (Route::has('password.request'))
                                    
                                @endif
                            
                        </div>
                       
                    </form>

  

                
         </div>
        
    </div>


@endsection
