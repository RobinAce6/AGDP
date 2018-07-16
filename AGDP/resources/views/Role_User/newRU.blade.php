@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
   <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h2>Asociación Rol-Usuario  </h2>
                  <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </li>
                      <li><a href="#" class="collapse-link"><i class="fa fa-wrench"></i></a>
                     </li>
                  </ul>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  
               <form method="POST" action="{{route('storeRU')}}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              {{ csrf_field() }}
              
              <div class="row">
                  
                  <div class="form-group">
                   <p> Usuario </p>
                      <select class="wrap-input100 m-t-6" name="idUser">
                        @foreach ($user as $User)
                          <option value="{{$User->idUser}}">{{$User->namePerson}}</option>
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
            
            <div class="row">
                <div class="form-group text-left">
                  <small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
                </div>
            </div>          
            <div class="ln_solid"></div>
            <div class="row">
              <div class="form-group col-xs-12 text-center">
              
                <a href="{{route('listaRU')}}" class="btn btn-light">Cancelar</a>
                         <button class="btn btn-primary">Guardar</button>
               </div>
            </div>
              
            </form>

          </div>
        </div>
      </div>
    </div>
</div>


@endsection