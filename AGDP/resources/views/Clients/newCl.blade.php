@extends('layouts.app')

@section('content')
    
<div class="limiter">
	<div class="container-login98">
		<div class="wrap-login98">
			<form class="login100-form" method="POST" action="{{ route('searchCl')}}">

				{{ csrf_field() }}
				
				<div class="container-login98">
					<div class="form-group">
						<div class="wrap-input100 validate-input m-t-4">
							<input class="input100" type="text" name="searchCl" placeholder="Buscar..." required>							
						</div>

						<br>

						<button class="btn btn-warning" type="submit">Buscar</button>

						<div class="container-login100-form-btn">
						   <a href="{{ route('newCl')}}" class="btn btn-warning">Crear Nuevo Rol</a>
						</div>

                  <div class="container-login100-form-btn">
                     <a href="{{ route('mainboard' )}}" class="btn btn-danger"> Home </a>
                  </div>
					</div>

					<table class="table table-bordered">
						<thead class="thead-light">
							<tr>
								<th scope="col"> # </th>
								<th scope="col">Consecutivo</th>
								<th scope="col">Nombre</th>
								<th scope="col"> </th>
							</tr>
						</thead>

						<tbody class="table table-bordered">
							@foreach ($clients as $clients)
							<tr>
								<td scope="row">{{ $clients->idClient}}</td>
								<td scope="row">{{ $clients->consecutiveClient}}</td>
								<td scope="row">{{ $clients->nameClient}}</td>
								<td>
									<a class="btn btn-link" href="{{ route('clients/edit', ['idClient' => $clients->idClient]) }}">Actualizar</a>
									<a href="{{ route('clients/destroy', ['idClient' => $clients -> idClient]) }}">Eliminar</a>
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