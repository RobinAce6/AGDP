@extends('layouts.app')

@section('content')

    <div class="wrapper-login">
        <div class="container">
        {{ csrf_field() }}
            <form method="POST  action="{{ route('login') }}" class="needs-validation" data-parsley-validate>
                <div class="row">
                    <div class="col-xs-12 col-xs-offset-0 col-md-4 col-md-offset-4 login text-center">
                        <img src="img/main/logo.png">
                        <h1 class="text-uppercase">Iniciar sesión</h1>
                        <div class="form-group text-left">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico empresarial" required data-parsley-required-message="Este campo es obligatorio" data-parsley-type-message="Ingrese un correo electrónico válido" value="{{ old('email') }}" id="email" name="email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                        </div>
                        <div class="form-group text-left password">
                            <div class="input-group-lock__pswwd">
                                <i class="lock fa fa-eye-slash hide"></i>
                                <i class="unlock fa fa-eye"></i>
                            </div>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" id="password" name="password" required data-parsley-required-message="Este campo es obligatorio">

                           @if ($errors->has('password'))
                              <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                              </span>
                           @endif
                            
                        </div>
                        <a href="" class="remember-pssw" data-toggle="modal" data-target="#exampleModalCenter">¿Olvidó su contraseña?</a><br>
                        <br>
                        <button type="submit" class="btn btn-success">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form  class="needs-validation" data-parsley-validate>
                        <div class="modal-header">
                            <span class="modal-title" id="exampleModalLongTitle">Restablecer contraseña</span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group text-left">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico empresarial" required data-parsley-required-message="Este campo es obligatorio" data-parsley-type-message="Ingrese un correo electrónico válido" >
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-primary">Cancelar</a>
                            <button type="submit" class="btn btn-success">Restablecer</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
                
    </div>
@endsection
