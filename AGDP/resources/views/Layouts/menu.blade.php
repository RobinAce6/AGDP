<!DOCTYPE html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Consultécnicos</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="..//css/style.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



	
//estaok

	



</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <!-- Start Header -->
        
				
				

		






<div class="wrapper-users">
	<!-- <div class=" main-nav ">
	<ul class="nav main-nav ">
		<li class="nav-item">
			<a class="nav-link active text-uppercase" href="#">Usuarios</a>
		</li>
		
		<li class="nav-item">
			<a class="nav-link text-uppercase" href="#">Areas de Trabajo</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-uppercase" href="#">Proyectos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-uppercase" href="#">Clientes</a>
		</li>
		
	</ul>
</div> -->
<div class=" main-nav ">
	<nav class="navbar navbar-expand-lg ">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
  				@guest
  				  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                 @else
				<li class="nav-item">
					<a class="nav-link text-uppercase" href="mails.html">Correspondencia</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-uppercase" href="folders.html">Proyectos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-uppercase" href="clients.html">Clientes</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link active text-uppercase" href="users.html">Usuarios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-uppercase" href="dependency.html">Areas de Trabajo</a>
				</li>
				
				
			</ul>
			<div class=" my-2 my-lg-0">
				<a href="" class="question"><i class="far fa-question-circle"></i></a>
				<div class="user">
					<a class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->namePerson}}</a>
					<div class="dropdown-menu dropdown-menu--user dropdown-menu-right">
						<a class="dropdown-item"  href="">Perfil de usuario</a>
						 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
					</div>
				</div>
				 @endguest
			</div>
		</div>
	</nav>
</div>






	


	<div class="row justify-content-center">
		<div class="col-sm-11">
			<h1 class="text-center">Clientes</h1> <br>	
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Cliente </button>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row justify-content-center">
										<div class="col-sm-12 col-md-5 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Consecutivo <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" id="" value="" required>
												<div class="invalid-feedback">
													Por favor ingrese el consecutivo
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-5 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre <sup>*</sup></label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" id="" value="" required>
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-2 form-group text-left ">
											<div for="" class="col-sm-12 col-lg-4 "><br></div>
											<div class="col-sm-10 col-lg-12">
												<button type="submit" class="btn btn-info">Crear</button>
											</div>
										</div>
										<div class="col-sm-12 form-group text-right">
											<small><sup>*</sup> Campos obligatorios</small>
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
			<table  class=" table-search hover text-center" style="width:100%">
					<thead>
						<tr>
							<th>Consecutivo</th>
							<th>Nombre</th>
							<th>Proyectos</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>01020304</td>
							<td>Consultecnicos</td>
							<td>
								<ul class="text-left">
									<li>a</li>
									<li>a</li>
									<li>a</li>
								</ul>
							</td>
							<td class="options">
								<i class="far fa-edit"></i>  
							</td>
						</tr>
						<tr>
							<td>01020304</td>
							<td>Consultecnicos</td>
							<td>
								<ul class="text-left">
									<li>a</li>
									<li>a</li>
									<li>a</li>
								</ul>
							</td>
							<td class="options">
								<i class="far fa-edit"></i>  
							</td>
						</tr>
						
					</tbody>
					<tfoot>
						<tr>
							<th>Consecutivo</th>
							<th>Nombre</th>
							<th>Proyectos</th>
							<th>Opciones</th>
						</tr>
					</tfoot>
			</table>
		</div>
	</div>


			
		<footer>
			
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" ></script>



	


	<script src="js/main.js"></script>
    
</body>
</html>
