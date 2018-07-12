@extends('layouts.main')

@section('content')

<form data-toggle="validator" role="form" method="POST" action="{{storeM}}">
	{{ csrf_field() }}			

	   	<div class="row justify-content-center main-container">
	      	<div class=" card col-sm-12 col-md-8 text-left">


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

								<div class="col-sm-12 col-md-5">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Fecha y Ciudad de Radicación <sup>*</sup></label>
									<div class="col-sm-12 col-lg-12">
										<div class="input-group" name="addressee" required>
											<input type="date" id="sentDate" class="form-control col-md-5"  required>
											<input type="text" placeholder="Ciudad" class="form-control col-md-8" id="city_id" required>
									 	</div>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Asunto <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="text" class="form-control" name="" value="" required>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-3">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Proyecto <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
		                                <select class="form-control custom-select" name="idFolder">
		                                @foreach ($folder as $Proyecto)
		                                    <option value="{{$Proyecto->idFolder}}">{{$Proyecto->nameFolder}}</option>
		                                @endforeach
		                                </select>
										<div class="invalid-feedback">
											Este valor es requerido*
										</div>
									</div>
								</div>
							
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-7"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Remitente <sup>*</sup></label>     
									<div class="col-sm-12 col-lg-12">
									<div class="input-group" name="addressee" required>
									  	<input type="text" placeholder="Nombre Persona" class="form-control col-md-5" required>
									  	<input type="text" placeholder="Entidad Remitente" class="form-control col-md-8" required>
									 	<select class="form-control custom-select" name="idFolder" required>
		                                @foreach ($folder as $Proyecto)
		                                    <option value="{{$Proyecto->idFolder}}">{{$Proyecto->nameFolder}}</option>
		                                @endforeach
		                                </select>
									 </div>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
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
								<div class="col-sm-12 col-md-5"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Observaciones</label>
									<div class="col-sm-10 col-lg-12">
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
									</div>
								</div>

								<div class="col-sm-12 col-lg-3">
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
								<div class="col-sm-12 col-lg-3">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">No. de folios </label>
									<div class="col-sm-10 col-lg-6">
										<input type="text" class="form-control" name="" value="">
									</div>
								</div>
								<div class="col-sm-12 col-lg-2 form-group form-check text-center">
									<label for="exampleCheck1" class="form-check-label col-sm-12 col-lg-12 col-form-label">Entregada a archivo </label>
									<div class="col-sm-10 col-lg-12 text-center">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
									</div>
									
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-12 col-md-4">
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Fecha de envío <sup>*</sup></label>
									<div class="col-sm-10 col-lg-12">
										<input type="date" class="form-control" id="sentDate" required>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
	                                <label for="" class="col-sm-12 col-lg-12 col-form-label">Hora de envío <sup>*</sup></label>
	                                <div class="col-sm-10 col-lg-12">
	                                    <input type="time" class="form-control" name="create_at" value="" required>
	                                    <div class="invalid-feedback">
											Este campo es requerido*
	                                    </div>
	                                </div>
							    </div>
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
								<div class="col-sm-12 col-md-7"> 
									<label for="" class="col-sm-12 col-lg-12 col-form-label">Remitente <sup>*</sup></label>     
									<div class="col-sm-12 col-lg-12">
									<div class="input-group" name="addressee" required>
									  	<input type="text" placeholder="Nombre Persona" class="form-control col-md-5" required>
									  	<input type="text" placeholder="Entidad Remitente" class="form-control col-md-8" required>
									 	<select class="form-control custom-select" name="idFolder" required>
		                                @foreach ($folder as $Proyecto)
		                                    <option value="{{$Proyecto->idFolder}}">{{$Proyecto->nameFolder}}</option>
		                                @endforeach
		                                </select>
									 </div>
										<div class="invalid-feedback">
											Este campo es requerido*
										</div>
									</div>
								</div>
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
						</form>
					</div>
				
			</div>
		</div>
</form>
@endsection