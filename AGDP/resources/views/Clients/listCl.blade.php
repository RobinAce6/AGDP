@extends('layouts.main') 

@section('content')
<form  method="POST" action="{{ route('storeCl')}}">
	{{ csrf_field() }}
    <div class="row justify-content-center main-container">
		<div class="col-sm-11">
			<h1 class="text-center text-uppercase">Clientes</h1> <br>	
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Cliente </button>
				<a href="{{route('mainboard')}}" class="btn btn-success">Home</a>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row justify-content-center">
										<div class="col-sm-12 col-md-6 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" name="nameClient" required>
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
						<th scope="col">Empresa</th>
						<th scope="col">Proyecto</th>
						<th scope="col">Consecutivo</th>
						<th scope="col">Opciones </th>
					</tr>
				</thead>
				<tbody>
					@foreach ($client as $clients)
					<tr>
						<td scope="row">{{ $clients->nameClient}}</td>
						<td scope="row">
							@foreach($clients->folder as $folder)
								<ul>{{$folder->nameFolder}}</ul>
							@endforeach
						</td>
						<td scope="row">{{ $clients->mail}}</td>
						<td>
							<a class="btn btn-link" href="{{ route('clients/edit', ['idClient' => $clients->idClient]) }}"><i class="fas fa-pencil-alt"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</form>
@endsection