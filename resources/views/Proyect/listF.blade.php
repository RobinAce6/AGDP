@extends('layouts.main')

@section('content')

<!--<form  method="POST" action="{{route('storeF')}}">-->
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
								{{ Form::open(array('url' => 'proyect/store')) }}
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
									<div class="row justify-content-center">
										<div class="col-sm-12 col-md-6 form-group text-left">
											{{ Form::label('Nombre', 'Nombre') }}
        									{{ Form::text('name', '', array('class' => 'form-control')) }}
										</div>
										<div class="col-sm-12 col-md-6 form-group text-left">
											{{ Form::label('Codigo', 'Codigo') }}
        									{{ Form::text('cod', '', array('class' => 'form-control')) }}
										</div>
										<div class="col-sm-12 col-md-6 form-group text-left">
											{{ Form::label('Cliente', 'Cliente',[ 'class' => 'col-sm-12 col-lg-4 col-form-label', ]) }}
											<div class="col-sm-10 col-lg-12">
												{{ Form::select('client_id', $selectClient,null,[ 'class' => 'form-control custom-select', ]) }}
											</div>
										</div>
										<div class="col-sm-12 col-md-12 form-group text-center ">
											<button class="btn btn-success" >Guardar</button>
											<a href="{{route('proyect')}}" class="btn btn-light">Cancelar</a>
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
						<th scope="col">Cod. Proyecto</th>
						<th scope="col">Nombre Proyecto</th>
                  <th scope="col">Cliente</th>
						<th scope="col">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($folder as $folders)
					<tr>
						<td scope="row">{{ $folders->cod}}</td>
                  		<td scope="row">{{ $folders->name}}</td>
						<td scope="row">{{ $folders->Client->name}}</td>
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
                        		{{ Form::open(array('url' => 'proyect/update/'.$folders->id,'method' => 'post', 'files'=>true)) }}
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
									<div class="row justify-content-center">
										<div class="col-sm-12 col-md-6 form-group text-left">
											{{ Form::label('Nombre', 'Nombre') }}
        									{{ Form::text('name', $folders->name, array('class' => 'form-control')) }}
										</div>
										<div class="col-sm-12 col-md-6 form-group text-left">
											{{ Form::label('Codigo', 'Codigo') }}
        									{{ Form::text('cod', $folders->cod, array('class' => 'form-control')) }}
										</div>
										<div class="col-sm-12 col-md-6 form-group text-left">
											{{ Form::label('Cliente', 'Cliente',[ 'class' => 'col-sm-12 col-lg-4 col-form-label', ]) }}
											<div class="col-sm-10 col-lg-12">
												{{ Form::select('client_id', $selectClient,$folders->client_id,[ 'class' => 'form-control custom-select', ]) }}
											</div>
										</div>
										<div class="col-sm-12 col-md-12 form-group text-center ">
											<button class="btn btn-success" >Guardar</button>
											<a href="{{route('proyect')}}" class="btn btn-light">Cancelar</a>
										</div>
									</div>
								{{ Form::close() }}
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
<!--</form>-->

@endsection

                           	