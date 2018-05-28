@extends('layouts.app')

@section('content')
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-65 p-b-10">
			<form class="login100-form validate-form" method="POST"	action="{{ route('updateF', [$folder->idFolder]) }}">
				
				{{ method_field('PUT')}}
				{{ csrf_field() }}
				
				<span class="login100-form-title p-b-45">
					Actualizar Proyecto
				</span>
					
				<div class="form-control">

					<div class="wrap-input100 validate-input m-t-6">
						<input class="input100" type="number" name="idFolder" value="{{ $folder->idFolder }}" disabled>
					</div>

					<div class="wrap-input100 validate-input m-t-6">
						<input class="input100" type="text" name="nameFolder" value="{{ $folder->nameFolder }}" required>
					</div>

					<div class="form-group">
		            	<p> Cliente </p>
		               	<select class="wrap-input100 m-t-6" name="idCliente">
		                 @foreach ($client as $Client)
		                   <option value="{{$Client->idClient}}">{{$Client->nameClient}}</option>
		                 @endforeach
		               	</select>
		           	</div>
					<div class="container-login100-form-btn">
						<button class="btn btn-warning">Guardar</button>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<a href="{{ route('folder.listF')}}" class="btn btn-danger">Cancelar</a>
					</div>
					
					<div class="container-login100-form-btn">
						<a href="{{ route('folder.listF')}}" class="btn btn-primary">Regresar a la Lista</a>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>
@endsection