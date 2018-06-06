@extends('layouts.main')

@section('content')

<form class="login100-form" method="POST" action="" novalidate>
   {{ csrf_field() }}

   <div class="row justify-content-center main-container">
   		<div class="col-sm-12 text-left">
   			<h1 class="text-center text-uppercase">Usuarios</h1> <br>
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
   								<button class="dropdown-item" type="button"><a href="{{ route('user/edit', ['idUser' => $users->idUser]) }}">Editar</a></button>
   								<button class="dropdown-item lock" type="button"  data-toggle="modal" data-target=".modal-lock ">Deshabilitar</button>
   								<button class="dropdown-item unlock d-none" data-toggle="modal" data-target=".modal-unlock " type="button">Habilitar</button>
   								
   							</div>
   						</td>
   					</tr>
                  @endforeach
   				</tbody>
   				
   			</table>
   		</div>
   </div>

   <div>
      <a href="{{route('mainboard')}}" class="btn btn-success">Cancelar</a>
      <a href="{{route('newU')}}" class="btn btn-warning">Nuevo Usuario del Sistema</a>
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
   				<button type="submit" class="btn btn-info">Aceptar</button>
   			</div>
   		</div>
   	</div>
   </div> 
</form>
@endsection