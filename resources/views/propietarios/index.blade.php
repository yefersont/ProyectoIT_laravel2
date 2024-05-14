
@include('inc.header')

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
    <h2>Propietarios</h2>
    <div class="search-container">  
        <button onclick="window.location.href='{{url('propietario/create')}}'" id="search-button">Nuevo propietario +</button>
        <input type="text" id="search-input" placeholder="Buscar...">
        <button id="search-button">Buscar</button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
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