@extends('layouts.app')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-65 p-b-10">
				<form class="login100-form validate-form" method="POST"	action="{{ route('updateSW', [$storagew->idSW]) }}">

				    {{ method_field('PUT') }}
				    {{ csrf_field() }}
					
					<span class="login100-form-title p-b-45">
						Acualizar Persona
					</span>
						
					<div class="form-control">

						<div class="wrap-input100 validate-input m-t-6">
							<input class="input100" type="number" name="idSW" value="{{ $storagew->idSW}}" disabled>
						</div>

						<div class="wrap-input100 validate-input m-t-6">
							<input class="input100" type="text" name="nameSW" value="{{ $storagew->nameSW }}" required>
						</div>

						<div class="container-login100">
							<button class="btn btn-warning">Guardar</button>
						</div>

						<div class="container-login100">
							<a href="{{ route('storagew.listSW') }}" class="btn btn-danger">Cancelar</a>
						</div>

						<div class="container-login100">
							<a href="{{ route('storagew.listSW') }}" class="btn btn-primary">Regresar a la Lista</a>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
@endsection