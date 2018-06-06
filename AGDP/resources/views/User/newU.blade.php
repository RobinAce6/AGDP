@extends('layouts.main')

@section('content')

<div class="row justify-content-center main-container">
    <div class="col-sm-12 col-md-8 text-left">
      <form class="login100-form validate-form" method="POST" action="{{ route('storeU')}}" novalidate>

            {{ csrf_field() }}

      <h1 class="text-center text-uppercase">Registrar Nuevo Usuario</h1> <br>
      <form class="needs-validation" novalidate>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-lg-4 col-form-label">Nombre(s) <sup>*</sup></label>
          <div class="col-sm-10 col-lg-8">
            <input type="text" class="form-control" name="namePerson" value="" required>
            <div class="invalid-feedback">
              Por favor ingrese su(s) nombre(s)
            </div>
          </div>

        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-lg-4 col-form-label">Apellido(s) <sup>*</sup></label>
          <div class="col-sm-10 col-lg-8">
            <input type="text" class="form-control" name="lastnamePerson" value="" required>
            <div class="invalid-feedback">
              Por favor ingrese su(s) apellido(s)
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-lg-4 col-form-label">Número de documento <sup>*</sup></label>
          <div class="col-sm-10 col-lg-8">
            <input type="text" class="form-control" value="" name="codPerson" required>
            <div class="invalid-feedback">
              Por favor ingrese su número de documento
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-lg-4 col-form-label">Correo electrónico <sup>*</sup></label>
          <div class="col-sm-10 col-lg-8">
            <input type="text" class="form-control" name="email" value="" required>
            <div class="invalid-feedback">
              Por favor ingrese su correo electrónico
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-lg-4 col-form-label">Área de trabajo <sup>*</sup></label>
          <div class="col-sm-10 col-lg-8">
            <select class="form-control custom-select" name="idDependency">
            @foreach ($depend as $Depend)
               <option value="{{$Depend->idDependency}}">{{$Depend->nameDependency}}</option>
            @endforeach
            </select>
            <div class="invalid-feedback">
              Por favor ingrese el área de trabajo
            </div>
          </div>
        </div>

         <div class="form-group row">
            <label for="" class="col-sm-2 col-lg-4 col-form-label">Cargo <sup>*</sup></label>
               <div class="col-sm-10 col-lg-8">
                  <select class="form-control custom-select" name="idTypePerson">
                     @foreach ($typep as $typePerson)
                       <option value="{{$typePerson->idTypePerson}}">{{$typePerson->nameTypePerson}}</option>
                     @endforeach
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese el cargo
                  </div>
               </div>
         </div>      
        <div class="form-group text-left">
          <small><sup>*</sup> Campos obligatorios</small>
        </div>

        <div class="text-center">
         <button class="btn btn-warning">Guardar</button>
          <a href="{{route('user.listU')}}" class="btn btn-success">Cancelar</a>
        </div>
        
      </form>
    </div>
  </div>

@endsection