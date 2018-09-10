@extends('layouts.main')

@section('content')
<div class="row justify-content-center main-container">
	<div class="col-sm-12 col-md-8 col-lg-6 text-left">
		
		<h1 class="text-center text-uppercase">Mi Perfil</h1> <br>
		<div>
			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Nombre(s) y Apellido(s): </strong></p>
				<p for="" class="col-sm-6 text-left">{{Auth::user()->name}}  {{Auth::user()->lastname}}</p>
			</div>
			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Número de documento: </strong> </p>
				<p for="" class="col-sm-6 text-left">{{Auth::user()->codPerson}}</p>
			</div>
			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Correo electrónico:</strong> </p>
				<p for="" class="col-sm-6 text-left">{{Auth::user()->email}}</p>
			</div>
		</div>
			<div>
				<a href="{{route('home')}}" class="col-sm-6 text-left">Home</a>
			</div>
	</div>
</div>
@endsection