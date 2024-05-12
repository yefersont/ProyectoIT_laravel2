@include('inc.header')
<body>

    <section id="main-section">
    <h2>Vehiculos</h2>
    <div class="search-container">
        <button id="search-button">Nuevo vehiculo +</button>       
        <input type="text" id="search-input" placeholder="Buscar...">
        <button id="search-button">Buscar</button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Cedula propietario</th>
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
                    <td>{{ $vehiculo -> Cc_propietario_vehiculo }}</td>
                    <td>{{ $vehiculo -> Tipodevehiculo -> tp_vehiculo_tp }}</td>
                    <td>{{ $vehiculo -> placa_vehiculo }}</td>
                    <td>{{ $vehiculo -> Marca_vehiculo }}</td>                    
                    <td>{{ $vehiculo -> Modelo_vehiculo }}</td>
                    <td>{{ $vehiculo -> Color_vehiculo }}</td>
                    <td> <button type="button" class="btn btn-warning"> Actualizar </button>  <button type="button" class="btn btn-danger"> Eliminar </button>  </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- Contenido adicional (formularios, historiales, etc.) se puede agregar aquí -->
</section>


</body>

@include('inc.footer')