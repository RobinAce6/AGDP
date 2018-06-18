@extends('layouts.main')

@section('content')

<div class="row justify-content-center main-container">
   <div class="col-sm-11">
      <form class="needs-validation"  method="POST" action="{{route('storeU')}}">
         {{ csrf_field() }}

      <div class="row justify-content-center main-container">
      	<div class="col-sm-12 text-left">
            <div>
               <h1 class="text-center text-uppercase">Usuarios</h1> <br>
                     <a href="{{route('newU')}}" class="btn btn-info">Nuevo Usuario del Sistema</a><br><br>
                  </div>
                  <div>
      			      <table  class="table-search table-users hover  text-center" style="width:100%">
              				<thead>
              					<tr>
              						<th>Número de documento</th>
              						<th>Nombre y apellido</th>
              						<th>Área de trabajo</th>
              						<th>Rol</th>
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

            							<button type="button" class="btn " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            							<i class="fas fa-ellipsis-v"></i>
            							</button>
            							<div class="dropdown-menu dropdown-menu-right">
            								<button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalCenter-{{$users->idUser}}">Editar</button>

            								<button class="dropdown-item lock" type="button"  data-toggle="modal" data-target=".modal-lock ">Deshabilitar</button>
            								<button class="dropdown-item unlock d-none" data-toggle="modal" data-target=".modal-unlock " type="button">Habilitar</button>
            							</div>

                                 <div class="modal fade bd-example-modal-md" id="exampleModalCenter-{{$users->idUser}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Usuario</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                       </div>

                                       <div class="modal-body">
                                          <form class="needs-validation"  method="POST" action="{{ route('updateU', [$users->idUser]) }}" novalidate>

                                            {{ method_field('PUT')}}              
                                            {{ csrf_field() }}

                                               <div class="form-group">
                                                   <input class="form-control" type="text" name="codPerson" value="{{ $users->codPerson }}" required>
                                                    <br>
                                                   <input class="form-control" type="text" name="namePerson" value="{{ $users->namePerson }}" required>
                                                    <br>
                                                   <input class="form-control" type="text" name="lastnamePerson" value="{{ $users->lastnamePerson }}" required>
                                                    <br>
                                                   <input class="form-control" type="text" name="email" value="{{ $users->email }}" pattern="[a-z0-9._%+-]+@[consultecnicos.-]+\.[a-z]{2,3}$" title="Solo correo corporativo" required>
                                                    <br>
                                               </div>
                                             <div class="form-group">
                                                <p> Cargo </p>
                                                   <select class="form-control custom-select" name="idTypePerson">
                                                   @foreach ($typep as $typePerson)
                                                      <option value="{{$typePerson->idTypePerson}}">{{$typePerson->nameTypePerson}}</option>
                                                      @endforeach
                                                   </select>
                                             </div>
                                             <br>
                                             <div class="form-group">
                                                <p> Dependencia / Área de Trabajo </p>
                                                   <select class="form-control custom-select" name="idDependency">
                                                   @foreach ($depend as $Depend)
                                                      <option value="{{$typePerson->idTypePerson}}">{{$Depend->nameDependency}}</option>
                                                   @endforeach
                                                   </select>
                                             </div>
                                             <div class="hidden">
                                               <input class="input100" type="hidden" name="password">
                                             </div>
                                             <div class="modal-footer">
                                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                             </div>
                                          </form>
                                       </div>
                                     </div>
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
         				<button  class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancelar</button>
         				<button type="submit" class="btn btn-info">Aceptar</button>
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
         				<button  class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancelar</button>
         				<button class="btn btn-info">Aceptar</button>
         			</div>
         		</div>
         	</div>
         </div> 
      </form>
   </div>
</div>
@endsection