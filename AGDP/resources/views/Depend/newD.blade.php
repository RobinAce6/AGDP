@extends('layouts.app')

@section('content')

   <div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100 p-t-65 p-b-10">
            <form class="login100-form validate-form" method="POST" action="{{ route('storeD')}}" novalidate>

               {{ csrf_field() }}
               
               <span class="login100-form-title p-b-45">
                  Registro Dependencia
               </span>
                  
               <div class="form-control">

                  <div class="wrap-input100 validate-input m-t-6">
                     <input class="input100" type="text" name="nameDep" placeholder="Nombre" required>
                  </div>

                  <div class="container-login100-form-btn">
                     <button class="btn btn-warning">Guardar</button>
                     <a href="{{ route('depend.listD')}}" class="btn btn-danger">Cancelar</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>

@endsection