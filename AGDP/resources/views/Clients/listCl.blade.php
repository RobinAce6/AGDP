@extends('layouts.main') 

@section('main')

<form  method="POST" action="#">
	{{ csrf_field() }}
	<div class="right_col" role="main">
	<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Clientes </h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_content">
								<table id="datatable-responsive" class="table  table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Consecutivo</th>
											<th>Nombre </th>
											<th>Proyectos</th>
											<th>Opciones</th>
										</tr>
									</thead>
									<tbody>
										<tr class="locked">
											<td>1049638457</td>
											<td>Cliente 1</td>
											<td>
												<ul>
													<li>Proyecto 1</li>
													<li>Proyecto 2</li>
													<li>Proyecto 3</li>
													<li>Proyecto 4</li>
												</ul>
											</td>
											<td>
												<div class="dropdown">
													<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
														<i class="fa fa-ellipsis-v"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
													<li><a href="{{route('edit')}}">Modificar</a></li>
													<li class="lock"><a href="#">Desctivar</a></li>
													<li class="hide unlock"><a href="#">Activar</a></li>
													</div>
													
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

@endsection