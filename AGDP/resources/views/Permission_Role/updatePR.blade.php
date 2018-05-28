@extends('layouts.app')

@section('content')
<div class="limiter">
   <div class="container-login100">
      <div class="wrap-login100 p-t-65 p-b-10">
         <form class="login100-form validate-form" method="POST" action="{{ route('storePR')}}" novalidate>

            {{ csrf_field() }}
                
            <span class="login100-form-title p-b-45">
               Asociación Permiso-Rol
            </span>
                    
            <div class="form-control">

        		<div class="wrap-input100 validate-input m-t-6 validate-form">
                 <input class="input100" type="text" name="nPR" value="{{ $permisrole->nPR }}" disabled>
                </div>
                  
              <div class="form-group">
               <p> Permiso  </p>
                  <select class="wrap-input100 m-t-6" name="idPermission">
                    @foreach ($permis as $Permis)
                      <option value="{{$Permis->idPermission}}">{{$Permis->namePermission}}</option>
                    @endforeach
                  </select>
              </div>

              <div class="form-group">
               <p> Rol de Usuario </p>
                  <select class="wrap-input100 m-t-6" name="idRole">
                    @foreach ($role as $Role)
                      <option value="{{$Role->idRole}}">{{$Role->nameRole}}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="container-login100-form-btn">
               <button class="btn btn-warning">Guardar</button><br>
               <a href="{{ route('permisrole.listPR')}}" class="btn btn-danger">Cancelar</a>
            </div>
            <div>
               <div class="card-footer text-muted">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection