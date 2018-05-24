@extends('layouts.app')

@section(container)
	<div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100 p-t-65 p-b-10">
            <form class="login100-form validate-form" method="POST" action="{{ route('updateU, [$user->idUser]) }}">
               
               
               {{ csrf_field() }}
               
               <span class="login100-form-title p-b-45">
                  Actualizar Usuario
               </span>
                  
               <div class="form-control">

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="codPerson" value="{{ $user->codPerson }}">
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="namePerson" value="{{ $user->namePerson }}">
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="lastnamePerson" value="{{ $user->lastnamePerson }}">
                  </div>

                  </div>
                  <br>
                  <div class="form-group">
                   <p> Tipo de Persona </p>
                      <select class="form-control" name="idTypePerson">
                        @foreach ($typep as $typePerson)
                          <option value="{{$typePerson->idTypePerson}}">{{$typePerson->nameTypePerson}}</option>
                        @endforeach
                      </select>
                  </div>
                  <br>
                  <div class="form-group">
                   <p> Área de Trabajo </p>
                      <select class="form-control" name="idDependency">
                        @foreach ($depend as $Depend)
                          <option value="{{$typePerson->idTypePerson}}">{{$Depend->nameDependency}}</option>
                        @endforeach
                      </select>
                  </div>
            </div>
            <div class="card">
               <div class="card-header">
                   Usuario
               </div>
               <div class="card-body">
                     <input class="input100" type="text" name="userPerson" placeholder="Nombre de Usuario"  required>
                     <input class="input100" type="password" name="passwordPerson" placeholder="Contraseña" required>
                     <input class="input100" type="password" name="confirPassPerson" placeholder="Confirme Contraseña Contraseña" required>
               </div>
               <div class="container-login100-form-btn">
                  <button class="btn btn-warning">Guardar</button>
               </div>

               <div class="container-login100-form-btn">
                  <a href="{{ route('user.listU') }}" class="btn btn-danger">Cancelar</a>
               </div>   
            </div>
            </form>
         </div>
      </div>
   </div>
@endsection