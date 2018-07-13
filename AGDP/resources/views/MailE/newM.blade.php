@extends('layouts.main')

@section('content')

<form data-toggle="validator" role="form" method="POST" action="#">
	{{ csrf_field() }}			

	   	<div class="row justify-content-center main-container">
	      	<div class="col-sm-12 col-md-8 text-left">


				<h1 class="text-center text-uppercase">Registro Correspondencia</h1> <br>
					
				<div class="form-group row justify-content-center">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="select_received" name="select_radio" class="custom-control-input" checked>
						<label class="custom-control-label" for="select_received">Correspondencia recibida</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="select_sent" name="select_radio" class="custom-control-input">
						<label class="custom-control-label" for="select_sent">Correspondencia enviada</label>
					</div>
					<br>
				</div>

					<div id="sent" class="sent d-none">
						<form  class="needs-validation" novalidate>

							<div class="form-group row">
								<div class="col-sm-12 col-md-12">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Fecha de envío <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="date" class="form-control" name="sentDate" required>
										<div class="invalid-feedback">
											Por favor ingrese la fecha
										</div>
									</div>
								</div>
							<div class="col-sm-12 col-md-4"> 
		                        <label for="" class="col-sm-12 col-lg-12 col-form-label">Ciudad Origen <sup>*</sup></label>
		                        <div class="col-sm-10 col-lg-12">
		                           <select class="form-control custom-select" required>
		                               <option value="">Seleccione la ciudad Origen</option>
		                           </select>
		                        </div>
		                  	</div>
							<input type="text" class="form-control" name="" value="" required>
								<div class="invalid-feedback">
									Por favor ingrese la ciudad
								</div>
							</div>
		                    
							<div class="form-group row">
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Destinatario <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="idAddrress" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese el destinatario
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="col-sm-12 col-md-4">
		                                <label for="" class="col-sm-12 col-lg-12 col-form-label">Hora de envío <sup>*</sup></label>
		                                <div class="col-sm-10 col-lg-12">
		                                    <input type="time" class="form-control" name="create_at" value="" required>
		                                    <div class="invalid-feedback">
		                                        Por favor ingrese la hora
		                                    </div>
		                                </div>
								    </div>
								</div>
								<div class="col-sm-12 col-md-4">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Proyecto <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
		                                <select class="form-control custom-select" name="idFolder">
		                                @foreach ($folder as $Proyecto)
		                                    <option value="{{$Proyecto->idFolder}}">{{$Proyecto->nameFolder}}</option>
		                                @endforeach
		                                </select>
										<div class="invalid-feedback">
											Por favor ingrese el proyecto
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Remitente <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">

										<select class="form-control custom-select" required>
											<option value="">Seleccione el área de trabajo</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="invalid-feedback">
											Por favor ingrese el área de trabajo de destino
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Destinatario<br></label>
									<div class="col-sm-10 col-lg-12">
										
										<select class="form-control custom-select" required>
											<option value="">Seleccione el destinatario</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="invalid-feedback">
											Por favor ingrese el destinatario de destino
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Fecha de radicación <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="date" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese la fecha
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
											Por favor ingrese el asunto
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
								<div class="col-sm-12 col-lg-4">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Formato <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										
										<select class="form-control custom-select" required>
											<option value="">Seleccione el formato</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="invalid-feedback">
											Por favor ingrese el formato
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-lg-3">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Número de folios </label>
									<div class="col-sm-10 col-lg-6">
										<input type="text" class="form-control" name="" value="">
									</div>
								</div>
								<div class="col-sm-12 col-lg-4 form-group form-check text-center">
									<label for="exampleCheck1" class="form-check-label col-sm-12 col-lg-12 col-form-label">Entregada a archivo </label>
									<div class="col-sm-10 col-lg-12 text-center">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
									</div>
									
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-12 col-md-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Empresa de mensajería </label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="" value="">
										<div class="invalid-feedback">
											Por favor ingrese la empresa de mensajería
										</div>
									</div>
								</div>

								<div class="col-sm-12 col-md-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Mensajero <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese el nombre del mensajero
										</div>
									</div>
								</div>
							</div>

							<div class="form-group text-left">
								<small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
							</div>

							<div class="text-center">
								<button class="btn btn-info">Guardar</button>
								<a href="{{ route('maile.listM')}}" class="btn btn-light">Cancelar</a>
							</div>
						</form>
					</div>

					<div id="received" class="received">
						<form  class="needs-validation" novalidate>
							<div class="form-group row">
								<div class="col-sm-12 col-md-6"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Consecutivo <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese el consecutivo
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-4">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Fecha de recibido <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="date" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese la fecha
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Hora de recibido <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="time" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese la hora
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Ciudad <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese la ciudad
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Remitente <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese el remitente
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Cliente <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										
										<select class="form-control custom-select" required>
											<option value="">Seleccione el cliente</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="invalid-feedback">
											Por favor ingrese el cliente
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Proyecto <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12 ">
										
										<select class="form-control custom-select" required>
											<option value="">Seleccione el proyecto</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="invalid-feedback">
											Por favor ingrese el proyecto
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Destinatario <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										
										<select class="form-control custom-select" required>
											<option value="">Seleccione el área de trabajo</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="invalid-feedback">
											Por favor ingrese el área de trabajo de destino
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label"><br></label>
									<div class="col-sm-10 col-lg-12">
										
										<select class="form-control custom-select" required>
											<option value="">Seleccione el usuario</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
										<div class="invalid-feedback">
											Por favor ingrese el usuario de destino
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
											Por favor ingrese el asunto
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
											Por favor ingrese el formato
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Número de folios </label>
									<div class="col-sm-10 col-lg-4">
										<input type="text" class="form-control" name="" value="">
										
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Empresa de mensajería </label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="" value="">
										<div class="invalid-feedback">
											Por favor ingrese la empresa de mensajería
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Mensajero <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Por favor ingrese el nombre del mensajero
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
						</form>
					</div>
			</div>
		</div>
</form>
@endsection