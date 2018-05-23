@extends('layouts.app')

@section('content')
	
	<div class="limiter">
		<div class="container-login98">
			<div class="wrap-login98">
				<form class="login100-form" method="POST" action="{{ route('searchP')}}" novalidate>

					{{ csrf_field() }}
					
					<div class="container-login98">
						<div class="form-group">
							<div class="wrap-input100 validate-input m-t-4">
								<input class="input100" type="text" name="searchR" placeholder="Buscar..." required>							
							</div>

							<br>

							<button class="btn btn-warning" type="submit">Buscar</button>

							<div class="container-login100-form-btn">
								<a href="{{ route('newP') }}" class="btn btn-warning">Crear Nueva Persona</a>
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
									<th scope="col">Apellido(s)</th>
									<th scope="col">Correo Corporativo</th>
									<th scope="col">Tipo Persona</th>
									<th scope="col">  </th>
								</tr>
							</thead>
							<tbody class="table table-bordered">
								@foreach ($person as $persons)
								<tr>
									<td scope="row">{{ $persons->idPeo}}</td>
									<td scope="row">{{ $persons->nameP}}</td>
									<td scope="row">{{ $persons->surnameP}}</td>
									<td scope="row">{{ $persons->emailP}}</td>
									<td scope="row">{{ $persons->typeP}}</td>
									<td>
										<a class="btn btn-link" href="{{ route('person/edit', ['idPeo' => $persons->idPeo]) }}">Actualizar</a>
										<a href="{{ route('person/destroy', ['idPeo' => $persons->idPeo]) }}">Eliminar</a>
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