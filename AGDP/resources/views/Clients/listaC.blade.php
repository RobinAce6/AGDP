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
											<th>NIT</th>
											<th>Empresa </th>
											<th>Proyectos</th>
											<th>Opciones</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($client as $clients)
										<tr>
											<td scope="row">{{ $clients->nitClient}}</td>
											<td scope="row">{{ $clients->nameClient}}</td>
											<td scope="row">
												@foreach($clients->folder as $folder)
													<il>{{$folder->nameFolder}}</il>
												@endforeach
											</td>
											<td>
												<div class="dropdown">
													<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
														<i class="fa fa-ellipsis-v"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
													<li><a href="{{route('clients/Modificar', ['idClient' => $clients->idClient] )}}">Modificar</a></li>
													<li class="lock"><a href="#">Desctivar</a></li>
													<li class="hide unlock"><a href="#">Activar</a></li>
													</div>
													
													</div>
												</div>
											</td>
										</tr>
										@endforeach
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