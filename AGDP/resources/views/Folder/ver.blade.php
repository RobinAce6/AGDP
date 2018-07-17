@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>{{$folder->nameFolder}} <small>Proyecto {{($folder->idFolder)}}</small> </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						 <li><a href="editar_proyecto.html" class="collapse-link"><i class="fa fa-wrench"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">						
					<div class="row">
						<div class="form-group col-xs-12 col-md-6">
							<label class="control-label" for="last-name">Nombre Proyecto</label>
							<p>nameFolder</p>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label class="control-label">Cliente</label>
                               <p>nameClent</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<label class="control-label">Integrantes</label>
							<br><br>
						</div>					
						<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
							<div class="well profile_view">
								<div class="col-xs-12">
									<h4 class="brief"><i>Recepcionista</i></h4>
									<div class="left col-xs-12">
										<h2>Users</h2>
										
										<ul class="list-unstyled">
											<li><i class="fa fa-envelope"></i> esperanza.beltran@consultecnicos.com </li>
											<li><i class="fa fa-phone"></i> 3004611829 </li>
										</ul>
									</div>
									
								</div>
								<div class="col-xs-12 bottom text-right">
									<a href="ver_usuario.html" type="button" class="btn btn-primary btn-sm">
									<i class="fa fa-user"> </i> Ver Perfil
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group col-xs-12 text-center">
						<a href="{{ route('lista')}}" class="btn btn-primary">Cancelar</a>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

@endsection