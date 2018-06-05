@extends('layouts.app')

@section('content')
    
<div class="limiter">
	<div class="container-login98">
		<div class="wrap-login98">
			<form class="login100-form" method="POST" action="{{ route('searchTP')}}">

				{{ csrf_field() }}
				
				<div class="container-login98">
					<div class="form-group">
						<div class="wrap-input100 validate-input m-t-4">
							<input class="input100" type="text" name="searchTP" placeholder="Buscar..." required>							
						</div>

						<br>

						<button class="btn btn-warning" type="submit">Buscar</button>

						<div class="container-login100-form-btn">
						   <a href="{{ route('newTP')}}" class="btn btn-warning">Crear Nuevo Tipo de Persona</a>
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
							@foreach ($typep as $typeP)
							<tr>
								<td scope="row">{{ $typeP->idTypePerson}}</td>
								<td scope="row">{{ $typeP->nameTypePerson}}</td>
								<td>
									<a class="btn btn-link" href="{{ route('typePerson/edit', ['idTypePerson' => $typeP->idTypePerson]) }}">Actualizar</a>
									<a href="{{ route('typePerson/destroy', ['idTypePerson' => $typeP -> idTypePerson]) }}">Eliminar</a>
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