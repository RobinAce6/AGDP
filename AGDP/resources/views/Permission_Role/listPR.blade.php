@extends('layouts.main')

@section('content')

<div class="row justify-content-center main-container">

	<form class="login100-form" method="POST" action="{{ route('searchPR')}}">
		{{ csrf_field() }}

		<div class="col-sm-11">
			<h1 class="text-center text-uppercase">Roles</h1> <br>	
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Editar Rol </button>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse show" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row">
										
										<div class="col-sm-12 col-md-5 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" id="" value="" required>
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
										</div>
										<div class="col-sm-12 form-group text-center">
												@foreach ($permisrole as $permisRole)
											<p class="text-left col-sm-12 ">- {{$permisRole->Roles->nameRole}}*</p>
											<div class="row">
												<div class="col-sm-12 col-md-3 text-left">
													<p  class="text-left col-sm-12 ">- </p>
												</div>
												<div class="col-sm-12 col-md-9 text-left">
													<div class="row">
														<div class="form-check col-sm-10 col-lg-3">
															<input class="form-check-input" type="checkbox" value="{{ $permisRole->Roles->idRole}}" id="defaultCheck1">
															<label class="form-check-label" for="defaultCheck1">
															{{ $permisRole->Roles->nameRole}}
															</label>
														</div>
													</div>
												</div>
												@endforeach
											<div>
												<br>
											</div>
											<div class="col-sm-12 form-group text-left">
												<br>
												<small><sup>*</sup> Campos obligatorios</small>
											</div>
											<div class="col-sm-12 col-md-12 form-group text-center ">
												<div class="row justify-content-center">
													<div class="col-sm-10 col-lg-4 text-center">
														<button type="submit" class="btn btn-info">Guardar</button>
														<a href="{{route('mainboard')}}" class="btn btn-light">Cancelar</a>
													</div>
												</div>
												
											</div>
											
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-11">
			<br><br>
			<div>
				<div class="card">
					<div class="card-header" id="headingOne">
						<h6 class="mb-0" data-toggle="collapse" data-target="#superadmin" aria-expanded="true" aria-controls="superadmin">
						Super Administrador
						<a href="edit_rol.html"><i class="fas fa-pencil-alt float-right"></i></a>
						</h6>
					</div>
					<div id="superadmin" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<p><strong>Permisos</strong></p>
							<div class="col-sm-12 form-group text-center">
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								<div>
									<br>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								<div>
									<br>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h6 class="mb-0" data-toggle="collapse" data-target="#admin" aria-expanded="true" aria-controls="admin">
						Administrador
						<a href="edit_rol.html"><i class="fas fa-pencil-alt float-right"></i></a>
						</h6>
					</div>
					<div id="admin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<p><strong>Permisos</strong></p>
							<div class="col-sm-12 form-group text-center">
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								<div>
									<br>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								<div>
									<br>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h6 class="mb-0" data-toggle="collapse" data-target="#oparation" aria-expanded="true" aria-controls="oparation">
						
						Operador
						<a href="edit_rol.html"><i class="fas fa-pencil-alt float-right"></i></a>
						</h6>
					</div>
					<div id="oparation" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<p><strong>Permisos</strong></p>
							<div class="col-sm-12 form-group text-center">
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								<div>
									<br>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								<div>
									<br>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 text-left">
										<p  class="text-left col-sm-12 permission-title">-Usuario</p>
									</div>
									<div class="col-sm-12 col-md-9 text-left">
										<ul class="permission">
											<li >Crear</li>
											<li>Modificar</li>
											<li>Ver información personal</li>
											<li>Deshabilitar/Habilitar</li>
											<li>Ver Lista</li>
										</ul>	
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</div>


@endsection