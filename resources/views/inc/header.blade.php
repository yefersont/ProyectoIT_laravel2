<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero COTECNOVA</title>
    @vite(['resources/css/app.css','resources/js/app.js'])<!-- Llama el css y js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>


<body>
    <header id="header">
        <img src="s" id="logo">
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