@extends('layouts.main')

@section('content')



    
    
	<div class="row justify-content-center main-container">
	<h1 class="text-center text-uppercase ">Área de Trabajo</h1> <br>	
		<div class="col-sm-11">
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Departamento </button>
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
								
								{{ Form::open(array('url' => 'depend/store')) }}
									<div class="row justify-content">
										<div class="col-sm-12 col-md-4 form-group text-left">
											{{ Form::label('name', 'name') }}
        									{{ Form::text('name', '', array('class' => 'form-control')) }}
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
			<div>
				<div class="card">
				@foreach ($depend as $depends)
					<div class="card-header" id="headingOne">
						<h6 class="mb-0" data-toggle="collapse" data-target="#gerencia{{$depends->id}}" aria-expanded="true" aria-controls="gerencia{{$depends->id}}">
						{{$depends->name}}
						</h6>
					</div>
					<div id="gerencia{{$depends->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<P><strong> {{$depends->name}}</strong></P>
							<br>
							<p><strong>Trabajadores:</strong></p>
							@foreach ($depends->UserDependenci($depends->id) as $user)
								{{$user->name}} {{$user->lastname}}
							@endforeach
						</div>
					</div>
				@endforeach
				</div>
			</div>
        </div>
	</div>

@endsection
	