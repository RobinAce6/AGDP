@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Usuarios </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          
          <div class="col-md-12 col-sm-12 col-xs-12">
            
              
              <div class="x_content">
                <table id="datatable-responsive" class="table  table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No. Documento</th>
                      <th>Nombre </th>
                      <th>Área de trabajo</th>
                      <th>Cargo</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>    
                    @foreach ( $user as $users)
                    <tr>
                      <td>{{ $users->codPerson}}</td>
                      <td>{{ $users->namePerson}} {{$users->lastnamePerson}}</td>
                      <td>{{ $users->Dependency->nameDependency}}</td>
                      <td>{{ $users->TypePerson->nameTypePerson}}</td>

                      <td class="options">
                        
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <li><a href="{{route('Modificar', ['idUser' => $users->idUser]) }}">Modificar</a></li>
                          <li><a href="#">Ver</a></li>
                          <li class="lock" ><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-lock">Deshabilitar</a></li>
                          <li class="hide unlock"><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-unlock">Habilitar</a></li>
                          </div>
                        </div>
                      </td>
                      
                    </tr>   
                    @endforeach
                  </tbody>
                </table>
              </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade modal-lock" tabindex="-1" role="dialog" aria-labelledby="modal-lock" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>¿Desea deshabilitar este usuario?</p>
        <button  class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancelar</button>
        <button type="submit" class="btn btn-success">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade modal-unlock" tabindex="-1" role="dialog" aria-labelledby="modal-unlock" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>¿Desea habilitar este usuario?</p>
        <button  class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancelar</button>
        <button type="submit" class="btn btn-success">Aceptar</button>
      </div>
    </div>
  </div>
</div> 

@endsection