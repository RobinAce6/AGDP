@extends('layouts.app')

@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-65 p-b-10">
				<form class="login100-form validate-form" method="POST" action="{{ route('login')}}">

					{{ csrf_field() }}
					
					<span class="login100-form-title p-b-45">
						Bienvenido
					</span>
					<span class="login100-form-avatar">
						<img src="../images/logo1.png">
					</span>

					<div class="wrap-input100 validate-input m-t-5 m-b-35 {{ $errors->has('userPerson') ? 'has-error' : '' }}"  value= "{{ old('userPerson')}}">
						<input class="input100" type="text" name="userPerson" placeholder="Usuario">
					
					{!! $errors ->first('userPerson', '<span class="badge badge-pill badge-danger">:message</span>') !!}

					</div>

					<div class="wrap-input100 validate-input m-b-50 {{ $errors->has('password') ? 'has-error' : '' }}">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
					
					{!! $errors ->first('password', '<span class="badge badge-pill badge-danger">:message</span>') !!}

					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Olvidé mi 
							</span>

							<a href="#" class="txt2">
								Usuario / Contraseña?
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>


@endsection