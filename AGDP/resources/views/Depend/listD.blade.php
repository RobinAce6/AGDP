@extends('layouts.main')

@section('content')

<form class="login100-form" method="POST" action="{{ route('searchD')}}">

    {{ csrf_field() }}
    
	<div class="row justify-content-center main-container">
		<div class="col-sm-11">
			<h1 class="text-center text-uppercase ">Área de Trabajo</h1> <br>	
			<div class="col-sm-12">
				<div class="form-row">
					<button class="btn btn-info form-group col-md-3" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nueva área </button>
					<div class="form-group col-lg-md-2">
						<input class="form-control" type="text" name="searchD" placeholder="Buscar..." required>                     
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row justify-content-center">
											<div class="col-sm-12 col-md-6 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre(s) <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" id="" value="" required>
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Descripción <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<textarea class="form-control" id="" rows="1" required></textarea>
												<div class="invalid-feedback">
													Por favor ingrese una descripción
												</div>
											</div>
										</div>
										<div class="col-sm-12 form-group text-left">
											<small><sup>*</sup> Campos obligatorios</small>
										</div>
										<div class="col-sm-12 col-md-12 form-group text-center ">
											<button type="submit" class="btn btn-info">Guardar</button>
											<a href="dependency.html" class="btn btn-light">Cancelar</a>
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
			@foreach ($depend as $depends)
				<div class="card">
					<div class="card-header" id="headingOne">
						<h6 class="mb-0" data-toggle="collapse" data-target="#gerencia" aria-expanded="true" aria-controls="gerencia">
						Gerencia
						<a class="btn btn-link" href="{{ route('depend/edit', ['idDependency' => $depends->idDependency]) }}"><i class="fas fa-pencil-alt float-right"></i></a>
						</h6>
					</div>
					<div id="gerencia" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<P><strong> {{$depends->nameDependency}}</strong><br>--</P>
							<br>
							<p><strong>Trabajadores:</strong></p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
        </div>
	</div>
</form>  
@endsection
	