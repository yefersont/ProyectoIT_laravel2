@include('inc.header')


<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css" rel="stylesheet">

<body>


@if( Session::has('mensaje'))
        <div class="alert alert-info alert-dismissible" role="alert">
            {{ Session::get('mensaje')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
    @endif

    @if( Session::has('mensajeeliminado'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{ Session::get('mensajeeliminado')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
    @endif
    
    <section id="main-section">
    <h2>Vehiculos</h2>
    <div class="search-container">
        <button onclick="window.location.href='{{ url('vehiculos/create') }}'" id="search-button">Nuevo vehículo +</button>
    </div>
    <div class="table-container">
        <table id="tablas">
            <thead>
                <tr>
                    <th>Tipo vehiculo</th>
                    <th>Placa </th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

            @foreach( $vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo -> Tipodevehiculo -> tp_vehiculo_tp }}</td>
                    <td>{{ $vehiculo -> placa_vehiculo }}</td>
                    <td>{{ $vehiculo -> Marca_vehiculo }}</td>                    
                    <td>{{ $vehiculo -> Modelo_vehiculo }}</td>
                    <td>{{ $vehiculo -> Color_vehiculo }}</td>
                    <td> 
                        <form action="{{ url('/vehiculos/'.$vehiculo->idVehiculo.'/edit') }}" method="get" style="display: inline;">
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                        </form>                      
                        
                        <form action="{{ url('/vehiculos/'.$vehiculo->idVehiculo) }}" method="post" style="display: inline;">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar al propietario?')"> Eliminar </button>  
                        </form>
                    
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

                
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>


    </div>
    <!-- Contenido adicional (formularios, historiales, etc.) se puede agregar aquí -->
</section>


</body>

@include('inc.footer')