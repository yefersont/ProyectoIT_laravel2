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
    <h2>Salidas</h2>
    <div class="search-container">            
        <input type="text" id="search-input" placeholder="Numero de placa">
        <button id="search-button">Buscar</button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Placa</th>
                    <th>Fecha salida</th>
                    <th>Hora salida</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $salidas as $salida)

                <tr>
                    <td>{{ $salida -> idSalidas  }}</td>
                    <td>{{ $salida -> id_Ingresos_id }}</td>
                    <td>{{ $salida -> Fecha_Salida  }}</td>                    
                    <td>{{ $salida -> Hora_Salida  }}</td>

                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
    <!-- Contenido adicional (formularios, historiales, etc.) se puede agregar aquí -->
</section>


</body>

@include('inc.footer')