@extends('layouts.main')

@section('main')

<form  method="POST" action="{{ route('storePR')}}" novalidate>
	{{ csrf_field() }}
    <div class="row justify-content-center main-container">
		<div class="col-sm-11">
			<h1 class="text-center text-uppercase">Permis_Role</h1> <br>	
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Rol </button>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row justify-content">

											<div class="col-sm-12 col-md-6 form-group text-left">
                        <label for="" class="col-sm-12 col-lg-4 col-form-label">Rol </label>
                        <div class="col-sm-10 col-lg-12">
                           <select class="form-control custom-select" name="idRole">
                           @foreach ($role as $permisRole)
                              <option value="{{$permisRole->idRole}}">{{$permisRole->nameRole}}</option>
                            @endforeach
                           </select>
                        </div>
                     </div>

											<div class="col-sm-12 col-md-6 form-group text-left">
                        <label for="" class="col-sm-12 col-lg-5 col-form-label">Permisos</label>
                        <div class="col-sm-10 col-lg-12">
                           <select class="form-control custom-select" name="idPermission">
                           @foreach ($permission as $permisRole)
                              <option value="{{$permisRole->idPermission}}">{{$permisRole->namePermission}}</option>
                            @endforeach
                           </select>
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-12 form-group text-center">
                        <button class="btn btn-info">Guardar</button>
                         <a href="{{route('others')}}" class="btn btn-light">Cancelar</a>
                     </div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-11">
			<br><br>
			<table  class=" table-search hover text-center" style="width:100%">
				<thead class="thead-light">
					<tr>
						<th scope="col">Rol</th>
						<th scope="col">Permisos</th>
						<th scope="col">Opciones </th>
					</tr>
				</thead>
				<tbody>
					@foreach ($permisrole as $permisRole)
					<tr>
                  <td scope="row">{{$permisRole->Roles->nameRole}} </td>
                  <td scope="row">{{$permisRole->Permissions->namePermission}} </td>
						<td>
							<a class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter-{{$permisRole->nPR}}"><i class="fas fa-pencil-alt"></i></a>

							<div class="modal fade bd-example-modal-md" id="exampleModalCenter-{{$permisRole->nPR}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               	<div class="modal-dialog modal-dialog-centered" role="document">
                 	<div class="modal-content">
                   	<div class="modal-header">
                     	<h5 class="modal-title" id="exampleModalLongTitle">Actualizar Rol</h5>
                    	 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     	</button>
                   	</div>

                   	<div class="modal-body">
                      <form class="login100-form validate-form" method="POST"	action="{{ route('updatePR', [$permisRole->nPR]) }}">

      								{{ method_field('PUT')}}
      								{{ csrf_field() }}

								      <div class="form-group">
                        <p> Rol </p>
                          <select class="form-control custom-select" name="idRole">
                          @foreach ($role as $permisRole)
                             <option value="{{$permisRole->idRole}}">{{$permisRole->nameRole}}</option>
                           @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                         <p> Permisos </p>
                          <select class="form-control custom-select" name="idPermission">
                          @foreach ($permission as $permisRole)
                             <option value="{{$permisRole->idPermission}}">{{$permisRole->namePermission}}</option>
                           @endforeach
                          </select>
                      </div>
								      <br>

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
</form>

@endsection