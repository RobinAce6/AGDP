@extends('layouts.main') 

@section('main')
<form  method="POST" action="{{ route('storeCl')}}">
	{{ csrf_field() }}
    <div class="row justify-content-center main-container">
		<div class="col-sm-11">
			<h1 class="text-center text-uppercase">Clientes</h1> <br>	
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Cliente </button>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row justify-content">
										<div class="col-sm-12 col-md-4 form-group text-left">
											<label for="" class="col-sm-10 col-md-6 col-form-label">NIT <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<input type="number" class="form-control" name="nitClient" required>
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-4 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" name="nameClient" required>
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-4 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Dirección <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" name="addressClient" required>
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
										</div>
										<div class="col-sm-12 form-group text-left">
											<small><sup>*</sup> Campos obligatorios</small>
										</div>
										<div class="col-sm-12 col-md-12 form-group text-center ">
											<button class="btn btn-success" >Guardar</button>
											<a href="{{route('mainboard')}}" class="btn btn-light">Cancelar</a>
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
			<table  class=" table-search hover text-center" style="width:100%">
				<thead class="thead-light">
					<tr>
						<th scope="col">NIT</th>
						<th scope="col">Empresa</th>
						<th scope="col">Proyecto</th>
						<th scope="col">Opciones </th>
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
							<a class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter-{{$clients->idClient}}"><i class="fas fa-pencil-alt"></i></a>

							<div class="modal fade bd-example-modal-md" id="exampleModalCenter-{{$clients->idClient}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                       	<div class="modal-dialog modal-dialog-centered" role="document">
                         	<div class="modal-content">
                           	<div class="modal-header">
                             	<h5 class="modal-title" id="exampleModalLongTitle">Actualizar Cliente</h5>
                            	 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             	</button>
                           	</div>

                           	<div class="modal-body">

                              	<form class="login100-form validate-form" method="POST"	action="{{ route('Actualizar', [$clients->idClient]) }}">

												{{ method_field('PUT')}}
												{{ csrf_field() }}

												<input class="form-control" type="number" name="nitClient" value="{{ $clients->nitClient }}" required>
												<br>
												<input class="form-control" type="text" name="nameClient" value="{{ $clients->nameClient }}" required>
												<br>
												<input class="form-control" type="text" name="addressClient" value="{{ $clients->addressClient }}" required>
												<br>

												<div class="modal-footer">
	                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	                                   <button type="submit" class="btn btn-primary">Guardar Cambios</button>
	                                	</div>

											</form>

                           	</div>
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
</form>
@endsection