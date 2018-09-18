@extends('layouts.main')

@section('content')
<div class="row justify-content-center main-container">
   <div class="col-sm-11">


      <div class="row justify-content-center main-container">
         <div class="col-sm-11">
            <h1 class="text-center text-uppercase">Correspondencia:<small> Registro</small></h1> <br>  

               <link href="css/jquery.treetable.css" rel="stylesheet" type="text/css" />
               <link href="css/jquery.treetable.theme.default.css" rel="stylesheet" type="text/css"/>
            <div>
               <a href="{{ route('home')}}" class="btn btn-success">Home</a> 
               <a href="{{ route('newM')}}" class="btn btn-secondary">Nuevo Registro</a>                
            </div> 
            <div>
               <table  class="treetable table-search hover text-left">
                  <thead class="text-center">
                     <th>Fecha</th>
                     <th>Consecutivo</th>
                     <th>Cliente</th>
                     <th>Proyecto</th>
                     <th>Asunto</th>
                     <th>Archivo</th>
                     <th>Estado</th>
                  </thead>
                  <tbody>
                     @foreach ($mail as $Mail)
                     <tr>
                        <td scope="row">{{ $Mail->receivedDate}}</td>
                        <td scope="row">CTE-{{ $Mail->Proyect->Client->cod}}-{{ $Mail->typeresponse}}-{{ $Mail->Proyect->cod}}-{{ $Mail->consectutive}}-{{ substr($Mail->receivedDate,0,4) }}</td>
                        <td scope="row">{{ $Mail->Proyect->Client->name}}</td>
                        <td scope="row">{{ $Mail->Proyect->name}}</td>
                        <td scope="row">{{ $Mail->subjet}}</td>   
                        <td scope="row">
                           <a href="{{ route('download', ['id' => $Mail->id]) }}"  target="_blank">Descargar</a>
                        </td>
                        <td scope="row">{{ $Mail->State->name}}</td>               
                        <td class="subject">
                           <span class="indenter" style="padding-left: 0px;">
                           <a href="#" title="Collapse">&nbsp;</a></span>
                        </td>
                        <td class="text-center">
                           <!--<a href="{{ route('maile/edit', ['id' => $Mail->id]) }}"><i class="fas fa-pencil-alt"></i></a> -->
                           <i class="fas fa-upload"  data-toggle="modal" data-target=".modal-upload{{$Mail->id}}"></i>
                        </td>
                        @if($Mail->state_id == 2)
                        <div class="modal fade modal-upload{{$Mail->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-upload" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                 {{ Form::open(array('url' => 'maile/guardarrespuesta', 'method' => 'post', 'enctype'=>'multipart/form-data', 'files' => true)) }}
                                    {{ csrf_field() }}   
                                    <div class="modal-body">
                                       <input type="hidden" name="id" value="{{$Mail->id}}">
                                    </div>
                                    <div class="modal-body">
                                       <div class="form-group text-left">
                                          <input type="text" class="form-control"  placeholder="Consecutivo" required readonly value="CTE-{{ $Mail->Proyect->Client->cod}}-XXX-{{ $Mail->Proyect->cod}}-{{ $Mail->consectutive}}-{{ substr($Mail->receivedDate,0,4) }}" name="con">
                                       </div>
                                       <select name="tipocarta" class="form-control custom-select">
                                          <option value="0">Selecione opcion</option>
                                          <option value="CI">CI</option>
                                          <option value="CN">CN</option>
                                          <option value="CO">CO</option>
                                       </select>
                                    </div>
                                    <div class="modal-body text-center">
                                       <button type="submit" class="btn btn-info">Guardar</button>
                                    </div>
                                {{ Form::close() }}
                              </div>
                           </div>
                        </div>
                        @else
                        <div class="modal fade modal-upload{{$Mail->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-upload" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                 {{ Form::open(array('url' => 'maile/guardarEnvio', 'method' => 'post', 'enctype'=>'multipart/form-data', 'files' => true)) }}
                                    {{ csrf_field() }}   
                                    <div class="modal-body">
                                       <input type="hidden" name="id" value="{{$Mail->id}}">
                                       <input type="hidden" name="user_id" value="{{$Mail->user_id}}">
                                    </div>
                                    <div class="modal-body">
                                       <div class="form-group text-left">
                                          <input type="text" class="form-control"  placeholder="Consecutivo" required readonly value="CTE-{{ $Mail->Proyect->Client->cod}}-{{ $Mail->typeresponse}}-{{ $Mail->Proyect->cod}}-{{ $Mail->consectutive}}-{{ substr($Mail->receivedDate,0,4) }}" name="con">
                                       </div>
                                       <div class="form-group custom-file">
                                          <input type="file" name="le_file"/>      
                                       </div>
                                       <select name="state_id" class="form-control custom-select">
                                          <option value="0">Selecione opcion</option>
                                          <option value="4">Responder</option>
                                          <option value="5">Archivo</option>
                                       </select>
                                    </div>
                                    <div class="modal-body text-center">
                                       <button type="submit" class="btn btn-info">Responder</button>
                                    </div>
                                {{ Form::close() }}
                              </div>
                           </div>
                        </div>
                        @endif
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
            
      </div>
   </div>
</div>
@endsection