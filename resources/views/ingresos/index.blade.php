
@include('inc.header')

<body>

    
    <section id="main-section">
        <!-- Contenido de la página principal -->
        <h2>Estado del Parqueadero</h2>
        <p>Capacidad total: 100 | Ocupados: 1 | Disponibles: 99</p>

        <!-- Contenido adicional (formularios, historiales, etc.) se puede agregar aquí -->
    </section>


    <section id="main-section">
    <!-- Contenido de la página principal -->
    <h2>Ingresos</h2>
    <div class="search-container">            
        <input type="text" id="search-input" placeholder="Numero de placa">
        <button id="search-button">Buscar</button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Placa</th>
                    <th>Fecha de ingreso</th>
                    <th>Hora de ingreso</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $ingresos as $ingreso)
                <tr>
                    <td>{{ $ingreso -> propietario -> Nombre_propietario }}</td>
                    <td>{{ $ingreso -> propietario -> Apellido_propietario }}</td>
                    <td>{{ $ingreso -> placa_ingreso }}</td>                    
                    <td>{{ $ingreso -> fehca_ingreso }}</td>
                    <td>{{ $ingreso -> hora_ingreso }}</td>
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