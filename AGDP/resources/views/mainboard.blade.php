@extends('layouts.app')

@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-65 p-b-10">
				<!--<div class="collapse" id="collapseExample">
					<div class="card card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</div>
				</div>-->
				<form class="login100-form validate-form " method="POST" action="{{ route('logout') }}">

					{{ csrf_field() }}
					
					<span class="login100-form-title p-b-45">
						Bienvenido, {{Auth::user()->userPerson}}

					</span>
					
					<div class="form-control">
							<button class="btn btn-primary">Cerrar Sesión</button>
					</div>
					<div class="form-control">
						<a href="{{ route('person')}}">Crear Nueva Persona</a>
					</div>
					<div class="form-control">
						<a href="{{ route('role')}}">Crear Nuevo Rol</a>
					</div>
					<div class="form-control">
						<a href="{{ route('depend')}}">Crear Nueva Dependencia</a>
					</div>
					<div class="form-control">
						<a href="{{ route('folder')}}">Crear Nuevo Proyecto</a>
					</div>
					<div class="form-control">
						<a href="{{ route('storagew')}}">Crear Nuevo SW</a>
					</div>
					<div class="form-control">
						<a href="{{ route('user')}}">Crear Nuevo Usuario</a>
					</div>
					<!--
					<p>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
							Button with data-target
						</button>
					</p>
					-->
				</form>
			</div>
		</div>
	</div>


@endsection