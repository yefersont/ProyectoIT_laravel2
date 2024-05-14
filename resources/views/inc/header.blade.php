<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero COTECNOVA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('public/fontawesome-free-6.5.2-web/css/all.min') }}">

    @vite(['resources/css/app.css','resources/js/app.js'])
    
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.css" rel="stylesheet">
    
    <script src="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">


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
            <a href="{{ url('reportes/')}}">Reportes</a>
        </nav>
    </header>

</body>
</html>