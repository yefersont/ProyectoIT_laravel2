<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero COTECNOVA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min') }}">

    @vite(['resources/css/app.css','resources/js/app.js','resources/js/jquery-3.7.1.min.js'])


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Roboto:ital,wght@0,100;1,400&display=swap" rel="stylesheet">

</head>


<body>
    
    <header id="header">
        <img src="{{asset('img/cotecnova.png')}}" id="logo">
        <h1>Parqueadero COTECNOVA</h1>

        <nav id="nav">
            <a href="{{ url('propietario/')}}">Propietarios</a>
            <a href="{{ url('vehiculos/')}}">Vehiculos</a> 
            <a href="{{ url('ingreso/')}}">Ingresos</a> 
            <a href="{{ url('salidas/')}}">Salidas</a> 
           <!--<a href="{{ url('reportes/')}}">Reportes</a> -->

            <div class="nav-item dropdown" style="display: inline-block;">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </nav>
    </header>

</body>
</html>