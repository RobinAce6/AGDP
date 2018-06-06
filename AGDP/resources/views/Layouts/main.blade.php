<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Consultécnicos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
    <body>

        <!-- Start Header -->
        
<div class="wrapper-users">
   
<div class=" main-nav">
    <nav class="navbar navbar-expand-lg ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                @guest
                  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                 @else
                 
                <li><a class="nav-link" href="{{route('newU')}}">{{ __('Registro') }}</a></li>

                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{route('maile')}}">Correspondencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{route('folder')}}">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{route('clients')}}">Clientes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active text-uppercase" href="{{route('user')}}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{route('depend')}}">Areas de Trabajo</a>
                </li>
                
                
            </ul>
            <div class=" my-2 my-lg-0">
                <a href="" class="question"><i class="far fa-question-circle"></i></a>
                <div class="user">
                    <a class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->namePerson}}</a>
                    <div class="dropdown-menu dropdown-menu--user dropdown-menu-right">
                        <a class="dropdown-item"  href="{{ route('profile')}}">Perfil de usuario</a>
                         <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js" ></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" ></script>



    


    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
