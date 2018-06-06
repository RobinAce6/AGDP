@extends('layouts.main')

@section('content')

<form class="login100-form" method="POST" action="">

    {{ csrf_field() }}
    
	<div class="row justify-content-center main-container">
	<h1 class="text-center text-uppercase ">Área de Trabajo</h1> <br>	
		<div class="col-sm-11">
			<br><br>
			<div>
				@foreach ($depend as $depends)
				<div class="card">
					<div class="card-header" id="headingOne">
						<h6 class="mb-0" data-toggle="collapse" data-target="#gerencia" aria-expanded="true" aria-controls="gerencia">
						{{$depends->nameDependency}}
						</h6>
					</div>
					<div id="gerencia" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<P><strong> {{$depends->nameDependency}}</strong><br>--</P>
							<br>
							<p><strong>Trabajadores:</strong></p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
        </div>
		<a href="{{route('mainboard')}}" class="btn btn-success">Home</a>
	</div>
</form>  
@endsection
	