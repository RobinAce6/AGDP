@extends('layouts.app')

@section('content')
    
<div class="limiter">
	<div class="container-login98">
		<div class="wrap-login98">
			<form class="login100-form" method="POST" action="{{ route('searchRU')}}">

				{{ csrf_field() }}
				
				<div class="container-login98">
					<div class="form-group">
						<div class="wrap-input100 validate-input m-t-4">
							<input class="input100" type="text" name="searchRU" placeholder="Buscar..." required>							
						</div>

						<br>

						<button class="btn btn-warning" type="submit">Buscar</button>

						<div class="container-login100-form-btn">
						   <a href="{{ route('newRU')}}" class="btn btn-warning">Asociación Rol-Usuarior</a>
						</div>

                  <div class="container-login100-form-btn">
                     <a href="{{ route('mainboard' )}}" class="btn btn-danger"> Home </a>
                  </div>
					</div>

					<table class="table table-bordered">
						<thead class="thead-light">
							<tr>
								<th scope="col"> # </th>
								<th scope="col">Usuario</th>
								<th scope="col">Rol</th>
							</tr>
						</thead>
						<tbody class="table table-bordered">
							@foreach ($userole as $userRole)
							<tr>
								<td scope="row">{{ $userRole->nRU}}</td>
								<td scope="row">{{ $userRole->User->namePerson}}</td>
								<td scope="row">{{ $userRole->Role->nameRole}}</td>
								<td>
									<a class="btn btn-link" href="{{ route('role_user/edit', ['nRU' => $userRole->nRU]) }}">Actualizar</a>
									<a href="{{ route('role_user/destroy', ['nRU' => $userRole -> nRU]) }}">Eliminar</a>
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