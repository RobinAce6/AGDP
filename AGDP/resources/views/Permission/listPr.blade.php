@extends('layouts.app')

@section('content')
    
<div class="limiter">
	<div class="container-login98">
		<div class="wrap-login98">
			<form class="login100-form" method="POST" action="{{ route('searchPr')}}">

				{{ csrf_field() }}
				
				<div class="container-login98">
					<div class="form-group">
						<div class="wrap-input100 validate-input m-t-4">
							<input class="input100" type="text" name="searchPr" placeholder="Buscar..." required>							
						</div>

						<br>

						<button class="btn btn-warning" type="submit">Buscar</button>

						<div class="container-login100-form-btn">
						   <a href="{{ route('newPr')}}" class="btn btn-warning">Crear Nuevo Permiso</a>
						</div>

                  <div class="container-login100-form-btn">
                     <a href="{{ route('mainboard' )}}" class="btn btn-danger"> Home </a>
                  </div>
					</div>

					<table class="table table-bordered">
						<thead class="thead-light">
							<tr>
								<th scope="col"> # </th>
								<th scope="col">Nombre</th>
								<th scope="col"> </th>
							</tr>
						</thead>
						<tbody class="table table-bordered">
							@foreach ($permiss as $permission)
							<tr>
								<td scope="row">{{ $permission->idPermission}}</td>
								<td scope="row">{{ $permission->namePermission}}</td>
								<td>
									<a class="btn btn-link" href="{{ route('permission/edit', ['idPermission' => $permission->idPermission]) }}">Actualizar</a>
									<a href="{{ route('permission/destroy', ['idPermission' => $permission -> idPermission]) }}">Eliminar</a>
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