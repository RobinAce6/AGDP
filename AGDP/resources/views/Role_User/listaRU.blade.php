@extends('layouts.main')

@section('main')

<form  method="POST" action="{{ route('storeRU')}}">

  {{csrf_field()}}

<div class="right_col" role="main">
   <div class="clearfix"></div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Proyectos </h2>
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
                                <th scope="col">Usuario</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Opciones </th>
                              </tr>
                           </thead>
                           <tbody>
                            @foreach ($userole as $useRole)
                            <tr>
                              <td scope="row">{{ $useRole->User->namePerson}}</td>
                              <td scope="row">{{ $useRole->Role->nameRole}}</td>
                              <td>
                                    <div class="dropdown">
                                       <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          <i class="fa fa-ellipsis-v"></i>
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                       <li><a href="{{ route('ModificarRU', ['nRU' => $useRole->nRU]) }}">Modificar</a></li>
                                       <li><a href="#">Ver</a></li>
                                       <li class="lock"><a href="#">Desactivar</a></li>
                                       <li class="hide unlock"><a href="#">Activar</a></li>
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
</form>

@endsection