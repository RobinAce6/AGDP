@extends('layouts.app')

@section('content')
    
    <div class="limiter">
		<div class="container-login98">
			<div class="wrap-login98">
				<form class="login100-form" method="POST" action="{{ route('searchR')}}" novalidate>

					{{ csrf_field() }}
					
					<span class="login100-form-title p-b-45">
						Registro Persona
					</span>
						
					<div class="container-login98">
						<div class="form-group">
							<div class="wrap-input100 validate-input m-t-4">
								<input class="input100" type="text" name="searchR" placeholder="Buscar...">							
							</div>

							<br>

							<button class="btn btn-warning" type="submit">Buscar</button>

							<div class="container-login100-form-btn">
							<a href="{{ route('newR')}}" class="btn btn-warning">Crear Nuevo Rol</a>
							</div>
						</div>

						<table class="table table-bordered">
							<thead class="thead-light">
								<tr>
									<th scope="col"> # </th>
									<th scope="col">Nombre</th>
								</tr>
							</thead>
							<tbody class="table table-bordered">
								@foreach ($role as $role)
								<tr>
									<td scope="row">{{ $role->idRole}}</td>
									<td scope="row">{{ $role->nameP}}</td>
									<td>
										<a href="{{ route('role/edit', ['idRole' => $role->idRole]) }}">Actualizar</a>
										<a href="{{ route('role/destroy', ['idRole' => $role->idRole]) }}">Eliminar</a>
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