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
                     <input class="input100" type="email" name="emailPerson" placeholder="Email Corporativo" required>
                  </div>
                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="typePerson_id" placeholder="Tipo Persona" required>
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="dependency_id" placeholder="Dependencia" required>
                  </div>
            </div>
            <div class="card">
               <div class="card-header">
                   Usuario
               </div>
               <div class="card-body">
                  <p class="card-title">Nombre de Usuario</p>
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