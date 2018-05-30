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
					
					<div class="form-control">
						<a href="{{ route('depend')}}"> Dependencia</a>
					</div>
					<div class="form-control">
						<a href="{{ route('role')}}"> Rol</a>
					</div>
					<div class="form-control">
						<a href="{{ route('clients')}}"> Cliente </a>
					</div>
					<div class="form-control">
						<a href="{{ route('folder')}}"> Proyecto</a>
					</div>
					<div class="form-control">
						<a href="{{ route('storagew')}}"> Formato Correspondencia</a>
					</div>
					<div class="form-control">
						<a href="{{ route('typePerson')}}"> Tipo Persona</a>
					</div>
					<div class="form-control">
						<a href="{{ route('permission')}}"> Permiso </a>
					</div>
					<div class="form-control">
						<a href="{{ route('user')}}"> Usuario</a>
					</div>
					<div class="form-control">
						<a href="{{ route('roleuser')}}">Asociar Rol a Usuario</a>
					</div>
					<div class="form-control">
						<a href="{{ route('permission_role')}}">Asociar Permiso a Rol</a>
					</div>
					<div class="form-control">
						<a href="{{ route('maile')}}">Correspondencia</a>
					</div>
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