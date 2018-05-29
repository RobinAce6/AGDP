@extends('layouts.app')

@section('content')
	<div class="limiter">
	<div class="container-login98">
		<div class="wrap-login98">
			<form class="login100-form" method="POST" action="{{ route('searchF')}}">

				{{ csrf_field() }}
				
				<div class="container-login98">
					<div class="form-group">
						<div class="wrap-input100 validate-input m-t-4">
							<input class="input100" type="text" name="searchF" placeholder="Buscar..." required>							
						</div>
						<button class="btn btn-warning" type="submit">Buscar</button>

						<div class="container-login100-form-btn">
						   <a href="{{ route('newF')}}" class="btn btn-warning">Nuevo Proyecto</a>
						</div>

                  <div class="container-login100-form-btn">
                     <a href="{{ route('mainboard' )}}" class="btn btn-danger"> Home </a>
                  </div>
					</div>

					<table class="table table-bordered">
						<thead class="thead-light">
							<tr>
								<th scope="col"> # </th>
								<th scope="col">Cliente</th>
								<th scope="col">Nombre</th>
								<th scope="col"> </th>
							</tr>
						</thead>
						<tbody class="table table-bordered">
							@foreach ($folder as $folders)
							<tr>
								<td scope="row">{{ $folders->idFolder}}</td>
								<td scope="row">{{ $folders->Client->nameClient}}</td>
								<td scope="row">{{ $folders->nameFolder}}</td>
								<td>
									<a class="btn btn-link" href="{{ route('folder/edit', ['idFolder' => $folders->idFolder]) }}">Actualizar</a>
									<a href="{{ route('folder/destroy', ['idFolder' => $folders -> idFolder]) }}">Eliminar</a>
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