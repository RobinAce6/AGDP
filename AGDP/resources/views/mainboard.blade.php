@extends('layouts.main')

@section('content')

			<div class="container">
				<div class="wrapper-dashboard">
				<form class="form-group" method="POST" action="{{ route('logout') }}">

					{{ csrf_field() }}

					<div class="row content-card justify-content-md-center">
						<div class="container text-center">
							<div class="row content-card justify-content-md-center">
								<div class="col-md-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/correspondencia_2.png">
											<h5 class="card-title">CORRESPONDENCIA</h5>
											<p class="card-text">Gestión de la correspondencia recibida y enviada.</p>
											<a href="{{route('maile')}}" class="card-link">Nueva</a>
											<a href="{{route('maile.listM')}}" class="card-link">Ultimas Referencias</a>
										</div>
									</div>
								</div>
								<div class="col-sm-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/proyectos.png">
											<h5 class="card-title">PROYECTOS</h5>
											<p class="card-text">Gestión de los proyectos que se realizan en la empresa.</p>
											<a href="#" class="card-link">Crear</a>
											<a href="#" class="card-link">Ver Listado</a>
										</div>
									</div>
								</div>
								<div class="col-sm-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/clientes.png">

											<h5 class="card-title">CLIENTES</h5>
											<p class="card-text">Gestión de remitentes y destinatarios de la correspondencia</p>
											<a href="{{ route('clients')}}" class="card-link">Crear</a>
											<a href="{{ route('clients')}}" class="card-link">Ver Listado</a>
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
											<a href="{{ route('user')}}" class="card-link">Crear</a>
											<a href="{{ route('user')}}" class="card-link">Ver Listado</a>
										</div>
									</div>
								</div>
								<div class="col-sm-4 text-center">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<img src="img/area_trabajo_2.png">

											
											<h5 class="card-title">ÁREAS DE TRABAJO</h5>
											<p class="card-text">Gestión de las diferentes áreas de trabajo. Ej.</p>
											<a href="{{ route('depend')}}" class="card-link">Crear</a>
											<a href="{{ route('depend')}}" class="card-link">Ver Listado</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection