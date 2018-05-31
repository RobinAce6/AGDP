
@extends('layouts.main')

@section('content')
<div class="limiter">
   <div class="container-login98">
      <div class="wrap-login98">
         <form class="login100-form" method="POST" action="{{ route('searchM')}}">

            {{ csrf_field() }}
            
            <div class="container-login98">
               <div class="form-group">
                  <div class="wrap-input100 validate-input m-t-4">
                     <input class="input100" type="text" name="searchM" placeholder="Buscar..." required>                     
                  </div>

                  <br>

                  <button class="btn btn-warning" type="submit">Buscar</button>

                  <div class="container-login100-form-btn">
                     <a href="{{ route('newM')}}" class="btn btn-warning">Registro Correpondencia</a>
                  </div>

                  <div class="container-login100-form-btn">
                     <a href="{{ route('mainboard' )}}" class="btn btn-danger"> Home </a>
                  </div>
               </div>

               <table class="table table-bordered">
                  <thead class="thead-light">
                     <tr>
                        <th scope="col">C No. </th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Tipo de C. </th>
                        <th scope="col">Proyecto </th>
                        <th scope="col">Asunto</th>
                        <th scope="col">Fecha Recibido</th>
                        <th scope="col">Fecha de Envío</th>
                        <th scope="col">Remitente</th>
                        <th scope="col">Destinatario</th>
                        <th scope="col">Remitente</th>
                        <th scope="col">Formato</th>                        
                        <th scope="col">Número de Folios</th>
                        <th scope="col">Obervaciones</th>
                        <th scope="col">Entregada a Archivo </th>
                        <th scope="col">Mensajería</th>
                        <th scope="col">Mensajero </th>
                        <th scope="col"> </th>
                     </tr>
                  </thead>
                  <tbody class="table table-bordered">
                           @foreach ($mail as $Mail)
                           <tr>
                              <td scope="row">{{ $Mail->idMail}}</td>
                              <td scope="row">{{ $Mail->idMail2}}</td>
                              <td scope="row">{{ $Mail->codEnterprise}}</td>
                              <td scope="row">{{ $Mail->typeMail}}</td>
                              <td scope="row">{{ $Mail->Folder->idFolder}}</td>
                              <td scope="row">{{ $Mail->affair}}</td>
                              <td scope="row">{{ $Mail->Dependency->nameDependency}}</td>
                              <td scope="row">{{ $Mail->receivedDate}}</td>
                              <td scope="row">{{ $Mail->sentDate}}</td>
                              <td scope="row">{{ $Mail->addressee}}</td>
                              <td scope="row">{{ $Mail->sender}}</td>
                              <td scope="row">{{ $Mail->StorageWay->nameSW}}</td>
                              <td scope="row">{{ $Mail->noPages}}</td>
                              <td scope="row">{{ $Mail->observations}}</td>
                              <td scope="row">{{ $Mail->deliveredToArchive}}</td>
                              <td scope="row">{{ $Mail->CompanyMssgr}}</td>
                              <td scope="row">{{ $Mail->nameMessenger}}</td>
                              <td>
                                 <a class="btn btn-link" href="{{ route('maile/edit', ['idMail' => $mail->idMail]) }}">Actualizar</a>
                                 <a href="{{ route('maile/destroy', ['idMail' => $mail -> idMail]) }}">Eliminar</a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
               </table>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection