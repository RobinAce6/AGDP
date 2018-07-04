<form class="form-group" method="POST" action="{{ route('listM') }}">

         {{ csrf_field() }}

         <div class="row justify-content-center main-container">
         <div class="col-sm-11">
            <h1 class="text-center text-uppercase">Correspondencia:<small> Registro</small></h1> <br>  

               <link href="css/jquery.treetable.css" rel="stylesheet" type="text/css" />
               <link href="css/jquery.treetable.theme.default.css" rel="stylesheet" type="text/css"/>
            <div>
               <a href="{{ route('mainboard')}}" class="btn btn-success">Home</a> 
               <a href="{{ route('newM')}}" class="btn btn-secondary">Nuevo Registro</a>                
            </div> 
            <div>
               <table  class="treetable table-search hover text-left">
                  <thead class="text-center">
                     <th>Consecutivo1</th>
                     <th>Consecutivo2</th>
                     <th>Consecutivo3</th>
                     <th>Fecha</th>
                     <th>Fecha</th>
                     <th>Asunto</th>
                     <th>Opciones</th>
                  </thead>
                  <tbody>
                     @foreach ($mail as $Mail)
                     <tr>
                        <td scope="row">{{ $Mail->idMail}}</td>
                        <td scope="row">{{ $Mail->idMail2}}</td>
                        <td scope="row">{{ $Mail->codEnterprise}}</td>
                        <td scope="row">{{ $Mail->receivedDate}}</td>
                        <td scope="row">{{ $Mail->sentDate}}</td>
                        <td scope="row">{{ $Mail->affair}}</td>                     
                        <td class="subject">
                           <span class="indenter" style="padding-left: 0px;">
                           <a href="#" title="Collapse">&nbsp;</a></span>
                        </td>
                        <td class="text-center">
                           <a href="{{ route('maile/edit', ['idMail' => $mail->idMail]) }}"><i class="fas fa-pencil-alt"></i></a> <i class="fas fa-upload"  data-toggle="modal" data-target=".modal-upload"></i>
                        </td>
                        <td>
                           <a class="btn btn-link" href="{{ route('maile/edit', ['idMail' => $mail->idMail]) }}">Actualizar</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
            <div class="modal fade modal-upload" tabindex="-1" role="dialog" aria-labelledby="modal-upload" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <form  class="needs-validation" novalidate>
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLongTitle">Cargar EDoc</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="form-group text-left">
                              <input type="text" class="form-control"  placeholder="Consecutivo" required>
                              <div class="invalid-feedback">
                                 Por favor ingrese el consecutivo del archivo
                              </div>
                           </div>
                           <div class="form-group custom-file">
                              <input type="file" class="custom-file-input" id="customFileLang" lang="es" required>
                              <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                              <div class="invalid-feedback">
                                 Por favor ingrese el archivo
                              </div>
                           </div>
                        </div>
                        <div class="modal-body text-center">
                           <button  class="btn btn-light">Cancelar</button>
                           <button type="submit" class="btn btn-info">Cargar Archivo</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </form>