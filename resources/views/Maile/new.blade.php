@extends('layouts.app')

@section('content')
<div class="limiter">
   <div class="container-login100">
		  
        <form class="form-control" method="POST" action="{{ route('storeM')}}">
			<div class="card">
			  <div class="card-header">
			    Nueva Correspondencia
			  </div>
			</div>
            {{ csrf_field() }}
		
            <div class="form-row">
				<div class="form-group col-md-4">
                	<input class="form-control"  type="text" name="codEnterprise" placeholder="Empresa" required>
              	</div>

                <div class="form-group col-md-4">
                    <input class="form-control" type="number" name="idMail2" placeholder="Secuencia" required>
                </div>

                <div class="form-group col-md-4">
                    <input class="form-control" type="text" name="typeMail" placeholder="Tipo Correspondencia" required>
                </div>            
				
				<div class="form-group col-md-4">
                    <input class="form-control" type="text" name="sender" placeholder="Remitente" required>
                </div> 

				<div class="form-group col-md-4">
                    <div class="form-group">
                	<label>Proyecto</label><br>
                        <select class="form-control" name="idFolder">
                       @foreach ($folder as $Proyecto)
                          	<option value="{{$Proyecto->idFolder}}">{{$Proyecto->nameFolder}}</option>
                        @endforeach
                        </select>
                	</div>
                </div> 

                <div class="form-group col-md-4">
                    <input class="form-control" type="text" name="idClient" placeholder="Cliente" required>
                </div> 

                <div class="form-group col-md-3">
                    <input class="form-control" type="text" name="affair" placeholder="Asunto" required>
                    <span class="badge badge-info">*Sea lo más espcífico posible</span>
                </div>
 
				<div class="form-group col-md-4">
                    <div class="form-group">
                	<label> Ciudad de Origen </label><br>
                        <select class="form-control" name="idCity">
                       @foreach ($city as $City)
                          	<option value="{{$City->idCity}}">{{$City->nameCity}}</option>
                        @endforeach
                        </select>
                	</div>
                </div>


                <div class="form-group col-md-3">
                	<label>Fecha </label>
                    <input class="form-control" type="date" name="sentDate" required>
                </div>

                <div class="form-group col-md-3">
                	<input class="form-control" type="text" name="sender" placeholder="Remitente" required>
                </div>

                <div class="form-group col-md-3">
                	<input class="form-control" type="text" name="addressee" placeholder="Destinatario" required>
                </div>

                <div class="form-group col-md-3">
                	<label>Fecha Recibido</label>
                    <input class="form-control" type="date" name="receivedDate" required>
                </div>
				
                <div class="form-group col-md-4">
                    <div class="form-group">
                	<label> Formato </label><br>
                        <select class="form-control" name="idSW">
                        @foreach ($storagew as $SW)
                          <option value="{{$SW->idSW}}">{{$SW->nameStorageWay}}</option>
                        @endforeach
                        </select>
                	</div>
                </div>

                <div class="form-group col-md-3">
                    <input class="form-control" type="number" name="noPages" placeholder="No. Folios" required>
                </div>

                <div class="form-group col-md-5">
                	<label>Observaciones</label>
                    <textarea class="form-control" name="observations" placeholder="Escribe las observaciones aquí"></textarea>
                </div>

				<div class="form-group col-md-5">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="deliveredToArchive">Enregado a Archivo
				  </label>
				</div>

				<div class="form-group col-md-3">
                    <input class="form-control" type="text" name="nameMessenger" placeholder="Nombre Mensajero" required>
                </div>

				<div class="form-group col-md-3">
                    <input class="form-control" type="text" name="CompanyMssgr" placeholder="Mensajería" required>
                </div>

	            <div class="container-login100-form-btn">
	               <button class="btn btn-warning">Guardar</button>
	               <a href="{{ route('maile.listM')}}" class="btn btn-danger">Cancelar</a>
	            </div>

			</div>
            <div class="card-footer">
            </div>	
		</form>
   </div>
</div>

@endsection