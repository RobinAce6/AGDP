@extends('layouts.main')

@section('content')

<form  method="POST" action="{{route('storeF')}}">
	{{ csrf_field() }}
    <div class="row justify-content-center main-container">
		<div class="col-sm-11">
			<h1 class="text-center text-uppercase">Proyectos</h1> <br>	
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Proyecto </button>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row justify-content-center">
                              <div class="col-sm-12 col-md-6 form-group text-left">
                                 <label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre</label>
                                 <div class="col-sm-10 col-lg-12">
                                    <input type="text" class="form-control" name="nameFolder" required>
                                    <div class="invalid-feedback">
                                       Por favor ingrese el nombre
                                    </div>
                                 </div>
                              </div>
										<div class="col-sm-12 col-md-6 form-group text-left">
											<label for="col-sm-10 col-lg-12" class="col-sm-12 col-lg-4 col-form-label">Cliente</label>
											<div class="col-sm-10 col-lg-12">
												<select class="form-control custom-select" name="idClient">
			                                   @foreach ($client as $Client) 
			                                     <option value="{{$Client->idClient}}">{{$Client->nameClient}}</option>
			                                   @endforeach
			                                </select>
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
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
						<th scope="col">Cod. Proyecto</th>
						<th scope="col">Nombre Proyecto</th>
                  <th scope="col">Cliente</th>
						<th scope="col">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($folder as $folders)
					<tr>
						<td scope="row">{{ $folders->idFolder}}</td>
                  <td scope="row">{{ $folders->nameFolder}}</td>
						<td scope="row">{{ $folders->Client->nameClient}}</td>
						<td>
							<a class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter-{{$folders->idFolder}}"><i class="fas fa-pencil-alt"></i></a>

							<div class="modal fade bd-example-modal-md" id="exampleModalCenter-{{$folders->idFolder}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    	<div class="modal-dialog modal-dialog-centered" role="document">
                      	<div class="modal-content">
                        	<div class="modal-header">
                          	<h5 class="modal-title" id="exampleModalLongTitle">Actualizar Cliente</h5>
                         	 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          	</button>
                        	</div>

                        	<div class="modal-body">

                           	<form class="login100-form validate-form" method="POST"	action="{{ route('updateF', [$folders->idFolder]) }}">

											{{ method_field('PUT')}}
											{{ csrf_field() }}

                                 <input class="form-control" type="number" name="idFolder" value="{{ $folders->idFolder }}" disabled><br>
                                                                 
                                 <input class="form-control" type="text" name="nameFolder" value="{{ $folders->nameFolder }}" required><br>

                                 <label> Cliente </label>
                                    <select class="form-control custom-select" name="idClient">
                                   @foreach ($client as $Client)
                                     <option value="{{$Client->idClient}}">{{$Client->nameClient}}</option>
                                   @endforeach
                                    </select>

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
		<div class="text-center col-sm-11">
			
		</div>
	</div>
</form>

@endsection