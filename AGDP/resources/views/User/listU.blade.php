@extends('layouts.app')

@section('content')

<div class="limiter">
	<div class="container-login98">
		<div class="wrap-login98">
			<form class="login100-form" method="POST" action="{{ route('searchU')}}" novalidate>

				{{ csrf_field() }}
				
				<div class="container-login98">
					<div class="form-group">
						<div class="wrap-input100 validate-input m-t-4">
							<input class="input100" type="text" name="searchU" placeholder="Buscar..." required>							
						</div>

						<br>

						<button class="btn btn-warning" type="submit">Buscar</button>

						<div class="container-login100-form-btn">
							<a href="{{ route('newU') }}" class="btn btn-warning">Crear Nuevo Usuario</a>
						</div>
						<div class="container-login100-form-btn">
							<a href="{{ route('mainboard' )}}" class="btn btn-danger"> Home</a>
						</div>
					</div>

					<table class="table table-bordered">
						<thead class="thead-light">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre(s)</th>
								<th scope="col" class="hidden"> Passowrd </th>
								<th scope="col"> </th>
							</tr>
						</thead>
						<tbody class="table table-bordered">
							@foreach ( $user as $users )
							<tr>
								<td scope="row">{{ $users->idUser }}</td>
								<td scope="row">{{ $users->userPerson }}</td>
								<td scope="row" class="hidden">{{ $users->password}}</td>
								<td>
									<a class="btn btn-link" href="{{ route('user/edit', ['idUser' => $users->idUser]) }}">Actualizar</a>
									<a href="{{ route('user/destroy', ['idUser' => $users->idUser]) }}">Eliminar</a>
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