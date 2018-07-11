@extends('layouts.main')

@section('main')

<div class="right_col" role="main">

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Actualizar Usuario <small> {{$user->namePerson}}</small> </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
               <li><a href="editar_usuario.html" class="collapse-link"><i class="fa fa-wrench"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" {{ route('updateU', [$user->idUser]) }}">

              {{ method_field('PUT')}}              
              {{ csrf_field() }}
              
              <div class="row">
                <div class="form-group col-xs-12 col-md-4">
                  <label class="control-label" for="last-name">Nombre(s)<span class="required">*</span></label>
                  <input type="text" name="namePerson" value="{{ $user->namePerson }}" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control">
                </div>
                <div class="form-group col-xs-12 col-md-4">
                  <label class="control-label" for="last-name">Apellido(s)<span class="required">*</span></label>
                  <input type="text" name="lastnamePerson" value="{{ $user->lastnamePerson }}" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control">
                </div>
                <div class="form-group col-xs-12 col-md-4">
                  <label class="control-label" for="last-name">Número de documento<span class="required">*</span></label>
                  <input type="text" name="codPerson" value="{{ $user->codPerson }}" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                  <label class="control-label" for="last-name">Correo electrónico<span class="required">*</span></label>
                  <input type="email" name="email" value="{{ $user->email }}" required="required" data-parsley-required-message="Este campo es obligatorio" data-parsley-type-message="Ingrese un valor válido de correo electrónico" class="form-control">
                </div>
                <div class="form-control">
                 <input class="input100" type="hidden" name="password">
              </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4 col-xs-12">
                  <label class="control-label">Cargo</label>
                  <select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio" name="idTypePerson">
                    @foreach ($depend as $Depend)
                      <option value="{{$Depend->idDependency}}">{{$Depend->nameDependency}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-4 col-xs-12">
                  <label class="control-label">Área de trabajo</label>
                  <select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio" name="idTypePerson">
                    @foreach ($typep as $typePerson)
                      <option value="{{$typePerson->idTypePerson}}">{{$typePerson->nameTypePerson}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              
              
            
              <div class="row">
                <div class="form-group text-left">
                  <small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
                </div>
              </div>          
              <div class="ln_solid"></div>
             
              <div class="row">
                <div class="form-group col-xs-12 text-center">
                  <button class="btn btn-success">Guardar</button><br>
                    <a href="{{ route('listaU')}}" class="btn btn-primary">Cancelar</a>
                </div>
              </div>
              

            </form>
          </div>
        </div>
      </div>
    </div>

</div>
@endsection