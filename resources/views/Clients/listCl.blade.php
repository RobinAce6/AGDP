@extends('layouts.main') 

@section('content')
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
								{{-- @include ('errors.list') --}}
							    @if ($errors->any())
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							    @endif
								
								{{ Form::open(array('url' => 'users/store')) }}
									<div class="row justify-content">
										<div class="col-sm-12 col-md-4 form-group text-left">
											{{ Form::label('NIT', 'NIT') }}
        									{{ Form::text('nit', '', array('class' => 'form-control')) }}
										</div>
										<div class="col-sm-12 col-md-4 form-group text-left">
											{{ Form::label('name', 'name') }}
        									{{ Form::text('name', '', array('class' => 'form-control')) }}
										</div>
										<div class="col-sm-12 col-md-4 form-group text-left">
											{{ Form::label('person', 'person') }}
        									{{ Form::text('person', '', array('class' => 'form-control')) }}
										</div>
										<div class="col-sm-12 col-md-4 form-group text-left">
											{{ Form::label('address', 'address') }}
        									{{ Form::text('address', '', array('class' => 'form-control')) }}
										</div>
										
										<div class="col-sm-12 form-group text-left">
											<small><sup>*</sup> Campos obligatorios</small>
										</div>
										<div class="col-sm-12 col-md-12 form-group text-center ">
											<button class="btn btn-success" >Guardar</button>
											<a href="{{route('home')}}" class="btn btn-light">Cancelar</a>
										</div>
									</div>
								{{ Form::close() }}
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
						<th scope="col">Codigo</th>
						<th scope="col">Opciones </th>
					</tr>
				</thead>
				<tbody>
					@foreach ($client as $clients)
					<tr>
						<td scope="row">{{ $clients->nit}}</td>
						<td scope="row">{{ $clients->name}}</td>
						<td scope="row">{{ $clients->cod}}</td>
			
						<td>
							<a class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter-{{$clients->id}}"><i class="fas fa-pencil-alt"></i></a>

							<div class="modal fade bd-example-modal-md" id="exampleModalCenter-{{$clients->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	                       	<div class="modal-dialog modal-dialog-centered" role="document">
	                         	<div class="modal-content">
	                           	<div class="modal-header">
	                             	<h5 class="modal-title" id="exampleModalLongTitle">Actualizar Cliente</h5>
	                            	 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                               <span aria-hidden="true">&times;</span>
	                             	</button>
	                           	</div>

	                           	<div class="modal-body">

	                              	<form class="login100-form validate-form" method="POST"	action="{{ route('update', [$clients->id]) }}">

													{{ method_field('PUT')}}
													{{ csrf_field() }}

													<input class="form-control" type="number" name="nitClient" value="{{ $clients->nit }}" required readonly>
													<br>
													<input class="form-control" type="text" name="nameClient" value="{{ $clients->name }}" required>
													<br>
													<input class="form-control" type="text" name="addressClient" value="{{ $clients->address }}" required>
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