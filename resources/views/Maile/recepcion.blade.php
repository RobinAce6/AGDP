@extends('layouts.main')

@section('content')

<form data-toggle="validator" role="form" method="POST" action="{{ route('storeM')}}">
	{{ csrf_field() }}			

	   	<div class="row justify-content-center main-container">
	      	<div class=" card col-sm-12 col-md-8 text-left">


				<h1 class="text-center text-uppercase">Registro Correspondencia</h1> <br>
					
				<div class="form-group row justify-content-center">
					<div class="custom-control custom-radio custom-control-inline">
						<label class="custom-control-label" for="select_received">Correspondencia recibida</label>
					</div>
				</div>
					<div id="received" class="received">
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
							<input type="hidden" name="_token" value="{{ csrf_token() }}" />
							<div class="form-group row">
								<div class="col-sm-12 col-md-4"> 
									{{ Form::label('Fecha Recibido', 'Fecha Recibido') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::text('date', '', array('class' => 'form-control datepicker')) }}
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									{{ Form::label('Cliente', 'Cliente') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::select('client_id', $selectClient,null,[ 'class' => 'form-control custom-select','onchange' => 'cambioProyect()' ]) }}
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									{{ Form::label('Proyecto', 'Proyecto') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::select('proyect_id', $selectProyect,null,[ 'class' => 'form-control custom-select', 'id'=> 'proyect_id']) }}
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-4"> 
									{{ Form::label('Departamento', 'Departamento') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::select('departamento_id', $selectDepart,null,[ 'class' => 'form-control custom-select','onchange' => 'cambioDepartamento()' ]) }}
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									{{ Form::label('Ciudad', 'Ciudad') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::select('ciudad_id', $selectCity,null,[ 'class' => 'form-control custom-select', 'id'=> 'ciudad_id']) }}
									</div>
								</div>
								<!--
								<div class="col-sm-12 col-md-4"> 
									{{ Form::label('Consecutivo', 'Consecutivo') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::text('consecutivo', null, array('class' => 'form-control','readonly')) }}
									</div>
								</div>
								-->
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-5"> 
									{{ Form::label('Destinatario', 'Destinatario') }}
									<div class="col-sm-12 col-lg-12">
										<div class="input-group" name="addressee" required>
											
											{{ Form::select('dependency_id', $selectDepend,null,[ 'class' => 'form-control custom-select','onchange' => 'cambioDependencia()' ]) }}
											{{ Form::select('persona_id', $selectUser,null,[ 'class' => 'form-control custom-select', 'id'=> 'persona_id']) }}
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-5"> 
									{{ Form::label('Asunto', 'Asunto') }}
									<div class="col-sm-12 col-lg-12">
										{{ Form::text('asunto', null, array('class' => 'form-control')) }}
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-12"> 
									{{ Form::label('Observaciones', 'Observaciones') }}
									<div class="col-sm-10 col-lg-12">
										{!! Form::textarea('obser',null,['class'=>'form-control']) !!}								
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-6">
									{{ Form::label('Empresa de mensajería', 'Empresa de mensajería') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::text('empresa', null, array('class' => 'form-control')) }}
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									{{ Form::label('Mensajero', 'Mensajero') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::text('mensajeria', null, array('class' => 'form-control')) }}
									</div>
								</div>
							</div>
							<!--
							<div class="form-group row">
								<div class="col-sm-12 col-lg-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Formato <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										
										<select class="form-control custom-select" required>
											<option value="">Seleccione el formato</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Número de folios </label>
									<div class="col-sm-10 col-lg-4">
										<input type="text" class="form-control" required>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
							</div>
							-->
							
							<div class="form-group text-left">
								<small class="col-sm-12 col-lg-12"><sup>*</sup> Campos obligatorios</small>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-info">Guardar</button>
								<a href="{{route('maile.listM')}}" class="btn btn-light">Cancelar</a>
							</div>
						{{ Form::close() }}
					</div>
				
			</div>
		</div>
</form>
<script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true
    });
</script>
<script type="text/javascript">
	function cambioProyect(){
        var data = {
            reg_Departamento: $('select[name="client_id"]').val()
        };
        //hacer las solicitudes al servidor
        var protocolo = window.location.protocol;
        var port = window.location.port;
        
        if (port!="") {
        	var URLactual = window.location.hostname+":"+port+"/";
        }else{
        	var URLactual = window.location.hostname+"/";
        }
        URLactual = protocolo+'//'+URLactual+'';
        $.ajax({
            url: URLactual+ "ajax/proyecto/"+data.reg_Departamento,
            type: 'post',
            data: data,
			headers: {
				"X-CSRF-TOKEN": "{{ csrf_token() }}"
			},
            success: function(info){
                $("#proyect_id").empty();
                if (info === 'false') {
                    console.log('no found');
                   $("#proyect_id").append('<option value="" selected="">Seleccione una Proyecto</option>');
                }else{
                    //modResponse = $.parseJSON(info.msg);
                    $.each(info.msg, function (i, dataCon) {
                        $("#proyect_id").append('<option value="' + i + '">' + dataCon + '</option>');
                        console.log(i);
                    });
                }
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }        
        });
    };
    function cambioDepartamento(){
        var data = {
            reg_Departamento: $('select[name="departamento_id"]').val()
        };
        //hacer las solicitudes al servidor
        var protocolo = window.location.protocol;
        var port = window.location.port;
        
        if (port!="") {
        	var URLactual = window.location.hostname+":"+port+"/";
        }else{
        	var URLactual = window.location.hostname+"/";
        }
        URLactual = protocolo+'//'+URLactual+'';
        $.ajax({
            url: URLactual+ "ajax/ciudad/"+data.reg_Departamento,
            type: 'post',
            data: data,
			headers: {
				"X-CSRF-TOKEN": "{{ csrf_token() }}"
			},
            success: function(info){
                $("#ciudad_id").empty();
                if (info === 'false') {
                    console.log('no found');
                   $("#ciudad_id").append('<option value="" selected="">Seleccione una Ciudad</option>');
                }else{
                    //modResponse = $.parseJSON(info.msg);
                    $.each(info.msg, function (i, dataCon) {
                        $("#ciudad_id").append('<option value="' + i + '">' + dataCon + '</option>');
                        console.log(i);
                    });
                }
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }        
        });
    };
    function cambioDependencia(){
        var data = {
            reg_Departamento: $('select[name="dependency_id"]').val()
        };
        //hacer las solicitudes al servidor
        var protocolo = window.location.protocol;
        var port = window.location.port;
        
        if (port!="") {
        	var URLactual = window.location.hostname+":"+port+"/";
        }else{
        	var URLactual = window.location.hostname+"/";
        }
        URLactual = protocolo+'//'+URLactual+'';
        $.ajax({
            url: URLactual+ "ajax/persona/"+data.reg_Departamento,
            type: 'post',
            data: data,
			headers: {
				"X-CSRF-TOKEN": "{{ csrf_token() }}"
			},
            success: function(info){
                $("#persona_id").empty();
                if (info === 'false') {
                    console.log('no found');
                   $("#persona_id").append('<option value="" selected="">Seleccione un Usuario</option>');
                }else{
                    //modResponse = $.parseJSON(info.msg);
                    $.each(info.msg, function (i, dataCon) {
                        $("#persona_id").append('<option value="' + i + '">' + dataCon + '</option>');
                        console.log(i);
                    });
                }
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }        
        });
    };
</script>




@endsection