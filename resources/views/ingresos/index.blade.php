
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
                    <th>Cedula</th>
                    <th>Placa</th>
                    <th>Fecha ingreso</th>
                    <th>Hora ingreso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1006319573</td>
                    <td>ZQE49E</td>
                    <td>05/05/2024</td>                    
                    <td>11:28</td>

                </tr>
            </tbody>
        </table>
    </div>
    <!-- Contenido adicional (formularios, historiales, etc.) se puede agregar aquí -->
</section>


</body>

@include('inc.footer')