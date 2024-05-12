
@include('inc.header')

<body>
    
    <section id="main-section">
    <h2>Propietarios</h2>
    <div class="search-container">  
        <a href="{{url('propietario/create')}} "  id="search-button">Nuevo propietario +</a>         
        <input type="text" id="search-input" placeholder="Buscar...">
        <button id="search-button">Buscar</button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Placa vehiculo</th>
                    <th>Rol</th>
                    <th>Opciones</th>

                </tr>
            </thead>
            <tbody>

            @foreach($propietarios as $propietario)
                <tr>
                    <td>{{ $propietario -> Cedula_propietario }}</td>
                    <td>{{ $propietario -> Nombre_propietario }}</td>
                    <td>{{ $propietario -> Apellido_propietario }}</td>                    
                    <td>{{ $propietario -> telefono_propietario }}</td>
                    <td>{{ $propietario -> vehiculo -> placa_vehiculo }}</td>
                    <td>{{ $propietario -> rol->Rol }}</td>
                    <td>
                        <form action="{{ url('/propietario/'.$propietario->idPropietario.'/edit') }}" method="get" style="display: inline;">
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                        </form>
                        <form action="{{ url('/propietario/'.$propietario->idPropietario) }}" method="post" style="display: inline;">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar al propietario?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</section>


</body>


@include('inc.footer')