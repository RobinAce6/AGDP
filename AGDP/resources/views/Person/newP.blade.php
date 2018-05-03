@extends('layouts.app')

@section('content')
	
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-65 p-b-10">
			<form class="login100-form validate-form" method="POST" action="{{ route('store')}}" novalidate>

				{{ csrf_field() }}
				
				<span class="login100-form-title p-b-45">
					Registro  Persona
				</span>
					
				<div class="form-control">

					<div class="wrap-input100 validate-input m-t-6">
						<input class="input100" type="text" name="nameP" placeholder="Nombre(s)" required>
					</div>

					<div class="wrap-input100 validate-input m-t-4">
						<input class="input100" type="text" name="surnameP" placeholder="Apellido(s)" required>
					</div>

					<div class="wrap-input100 validate-input m-t-4">
						<input class="input100" type="text" name="emailP" placeholder="Correo Corporativo" required>
					</div>

					<div class="wrap-input100 validate-input m-t-4">
						<input class="input100" type="text" name="typeP" placeholder="Tipo Persona" required>
					</div>

					<div class="container-login100-form-btn">
						<button class="btn btn-warning">Guardar</button>
						<a href="{{ route('person.listP')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection