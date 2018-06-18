@extends('layouts.main')

@section('content')

		<div class="container">
			<div class="wrapper-dashboard">
				<div class="row content-card justify-content-md-center" style="margin-top:0%;">
					<div class="jumbotron jumbotron-fluid" style="width: 100%; padding:4%">
						<div class="container">
							<h1 class="display-4 text-center">Bienvenido<strong> {{Auth::user()->namePerson}}</strong></h1>
						</div>
					</div>
				</div>
				<form class="form-group" method="POST" action="{{ route('logout') }}">
				 @if(Auth::user()->$roleuser === '2')
					{{ csrf_field() }}
						<div class="container text-center">
							<div class="row content-card justify-content-md-center">
								<div class="col-md-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/correspondencia_2.png">
											<h5 class="card-title">CORRESPONDENCIA</h5>
											<p class="card-text">Gestión de la correspondencia recibida y enviada.</p>
											<a href="{{route('newM')}}" class="card-link">Nueva</a>
											<a href="{{route('maile.listM')}}" class="card-link">Ultimas Referencias</a>
										</div>
									</div>
								</div>
								@elseif(Auth::user()->role === 'Consulta')
								<div class="col-sm-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/folder.png">
											<h5 class="card-title">PROYECTOS</h5>
											<p class="card-text">Gestión de los proyectos que se realizan en la empresa.</p>
											<a href="{{route('folder')}}" class="card-link">Ir</a>
										</div>
									</div>
								</div>
								<div class="col-sm-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/clientes.png">

											<h5 class="card-title">CLIENTES</h5>
											<p class="card-text">Gestión de remitentes y destinatarios de la correspondencia</p>
											<a href="{{ route('clients')}}" class="card-link">Ir</a>
										</div>
									</div>
								</div>
							</div>

							<div class="row content-card  justify-content-md-center">
									
								<div class="col-sm-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/usuarios.png">
											<h5 class="card-title">USUARIOS</h5>
											<p class="card-text">Administración de usuarios, roles, permisos y cargos en la empresa.</p>
											<a href="{{ route('newU')}}" class="card-link">Crear</a>
											<a href="{{ route('user')}}" class="card-link">Ver Listado</a>
										</div>
									</div>
								</div>
								<div class="col-sm-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/area_trabajo_2.png">

											
											<h5 class="card-title">DEPENDENCIAS</h5>
											<p class="card-text">Gestión de las diferentes áreas de trabajo. Ej.</p>
											<a href="{{ route('depend')}}" class="card-link">Ver Dependencias</a>
										</div>
									</div>
								</div>
								<div class="col-sm-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/proyectos.png">

											
											<h5 class="card-title">OTRAS CONFIGURACIONES</h5>
											<p class="card-text">Formato de Correspondencia, Cargo, Ciudades, Permisos, Roles del Sistema, entre otros.</p>
											<a href="{{ route('others')}}" class="card-link">Ir</a>
										</div>
									</div>
								</div>
							</div>
							@endif
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection