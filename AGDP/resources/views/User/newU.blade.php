@extends('layouts.app')

@section('content')

<div class="limiter">
   <div class="container-login100">
      <div class="wrap-login100 p-t-65 p-b-10">
         <form class="login100-form validate-form" method="POST" action="{{ route('storeU')}}" novalidate>

            {{ csrf_field() }}
                
            <span class="login100-form-title p-b-45">
               Registro Usuario
            </span>
                    
            <div class="form-control">

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="codPerson" placeholder="Identificación" required>
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="namePerson" placeholder="Nombre(s)" required>
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="lastnamePerson" placeholder="Apellido(s)" required>
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="email" name="email" placeholder="Email Corporativo" required>
                  </div>
                  <br>
                  <div class="form-group">
                   <p> Tipo de Persona </p>
                      <select class="wrap-input100 m-t-6" name="idTypePerson">
                        @foreach ($typep as $typePerson)
                          <option value="{{$typePerson->idTypePerson}}">{{$typePerson->nameTypePerson}}</option>
                        @endforeach
                      </select>
                  </div>  
                  <div class="form-group">
                   <p> Área de Trabajo </p>
                      <select class="wrap-input100 m-t-6" name="idDependency">
                        @foreach ($depend as $Depend)
                          <option value="{{$Depend->idDependency}}">{{$Depend->nameDependency}}</option>
                        @endforeach
                      </select>
                  </div>
            </div>
            <div class="hidden">
               <input class="input100" type="hidden" name="password">
            </div>
            <div class="container-login100-form-btn">
               <button class="btn btn-warning">Guardar</button><br>
               <a href="{{ route('user.listU')}}" class="btn btn-danger">Cancelar</a>
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