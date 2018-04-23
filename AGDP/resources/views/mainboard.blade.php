@extends('layouts.app')

@section('content')

	<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-65 p-b-10">
					<form class="login100-form validate-form " method="POST" action="{{ route('logout') }}">

						{{ csrf_field() }}
						
						<span class="login100-form-title p-b-45">
							Bienvenido, @User

						</span>

						<div class="wrap-input100 validate-input m-t-5 m-b-35 {{ $errors->has('userPerson') ? 'has-error' : '' }}"  value= "{{ old('userPerson')}}">
							<input class="input100" type="text" name="userPerson" placeholder="Usuario">
						
						{!! $errors ->first('userPerson', '<span class="badge badge-pill badge-danger">:message</span>') !!}

						</div>
						
						<div class="form-control">
								<button class="btn btn-primary">Cerrar Sesión</button>
						</div>
					</form>
				</div>
			</div>
	</div>


@endsection