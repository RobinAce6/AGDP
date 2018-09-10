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
										{{ Form::select('client_id', $selectClient,null,[ 'class' => 'form-control custom-select', ]) }}
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									{{ Form::label('Remitente', 'Remitente') }}
									<div class="col-sm-10 col-lg-12">
										{{ Form::select('proyect_id', $selectProyect,null,[ 'class' => 'form-control custom-select', ]) }}
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
										{{ Form::select('ciudad_id', $selectProyect,null,[ 'class' => 'form-control custom-select', 'id'=> 'ciudad_id']) }}
									</div>
								</div>
							</div>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
							<div class="form-group row">


								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Consecutivo <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										
										<input type="text" class="form-control" name="idMail2" value="" required>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Fecha Recibido </label>
									<div class="col-sm-10 col-lg-12">
										<input type="date" class="form-control" name="sentDate" value="" required>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Ciudad <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										
										<input type="text" class="form-control" name="originCity" value="" required>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								
								<div class="col-sm-12 col-md-5"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Destinatario <sup>*</sup></label>
									<div class="col-sm-12 col-lg-12">
										<div class="input-group" name="addressee" required>
										<input type="text" placeholder="Nombre " class="form-control col-md-6" required>
										<input type="text" placeholder="Dependencia " class="form-control col-md-9" required>
										</div>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-12"> 

									<label for="" class="col-sm-12 col-lg-4 col-form-label">Asunto <sup>*</sup></label>
									<div class="col-sm-10 col-lg-6">
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-12"> 

									<label for="" class="col-sm-12 col-lg-12 col-form-label">Observaciones</label>
									<div class="col-sm-10 col-lg-12">
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
										
									</div>
								</div>
							</div>
							
							
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
							<div class="form-group row">
								<div class="col-sm-12 col-md-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Empresa de mensajería </label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Mensajero <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Este valor es requerido*
										</div>
									</div>
								</div>
							</div>
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
            url: URLactual+ "ajax/ciudad",
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
</script>




@endsection