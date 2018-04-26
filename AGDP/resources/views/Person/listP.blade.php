@extends('layouts.app')

@section('content')
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-65 p-b-10">
				<form class="login100-form validate-form" method="POST" action="{{ route('searchP')}}" novalidate>

					{{ csrf_field() }}
					
					<span class="login100-form-title p-b-45">
						Registro Persona
					</span>
						
					<div class="form-control">
						<div class="form-group">
							<div class="wrap-input100 validate-input m-t-4">
								<input class="input100" type="text" name="searchR" placeholder="Buscar...">							
							</div>

							<button class="btn btn-warning" type="submit">Buscar</button>

							<div class="container-login100-form-btn">
								<a href="{{ route('person.newP')}}" class="btn btn-warning">Crear Nueva Persona</a>
							</div>
						</div>

						<table class="login100 table-striped">
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
							<tbody>
								@foreach ($person as $person)
								<tr>
									<td scope="row">{{ $person->idPeo}}</td>
									<td>{{ $person->nameP}}</td>
									<td>{{ $person->surnameP}}</td>
									<td>{{ $person->emailP}}</td>
									<td>{{ $person->typeP}}</td>
									<td>
										<a href="{{ route('person.edit', ['idPeo' => $movie->idPeo]) }}">Actualizar</a>
										<a href="{{ route('person/destroy', ['idPeo' => $movie->idPeo]) }}">Eliminar</a>
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