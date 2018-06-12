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
						<th scope="col">Cliente</th>
						<th scope="col">Nombre Proyecto</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($folder as $folders)
					<tr>
						<td scope="row">{{ $folders->idFolder}}</td>
						<td scope="row">{{ $folders->Client->nameClient}}</td>
						<td scope="row">{{ $folders->nameFolder}}</td>
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