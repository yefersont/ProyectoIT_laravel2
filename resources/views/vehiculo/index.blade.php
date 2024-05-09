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
                    <th>Tipo vehiculo</th>
                    <th>Placa </th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Cedula propietario</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Motocicleta</td>
                    <td>ZQE49E</td>
                    <td>Bajaj</td>                    
                    <td>2019</td>
                    <td>Negro</td>
                    <td>1006319573</td>
                    <td> <button type="button" class="btn btn-warning"> Actualizar </button> | <button type="button" class="btn btn-danger"> Eliminar </button>  </td>

                </tr>
                
            </tbody>
        </table>
    </div>
    <!-- Contenido adicional (formularios, historiales, etc.) se puede agregar aquí -->
</section>


</body>

@include('inc.footer')