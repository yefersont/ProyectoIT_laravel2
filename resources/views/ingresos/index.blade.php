
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


<!-- <section id="main-section">
        <h2>Estado del Parqueadero</h2>
        <p>Capacidad total: 100 | Ocupados: 1 | Disponibles: 99</p>
    </section> -->

    <section id="main-section">
    <!-- Contenido de la página principal -->
    <h2>Ingresos</h2>
    <div class="search-container">  
        
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrar ingreso</button>

<!-- Modal -->


    <form action="{{ url('/ingreso') }}" method="post">
        @csrf
        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de ingreso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="input-group flex-nowrap">
                        <input type="text" name="cc_propietario" id="Indentificacion" class="form-control" placeholder="Identificacion propietario" aria-describedby="addon-wrapping">
                    </div>                  
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Cancelar</button>
                    <button type="submit" class="btn btn-success"> Registrar </button>
                </div>
                </div>
            </div>
        </div>
    </form>

    

    </div>
    <div class="table-container">
        <table id="tablas">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de ingreso</th>
                    <th>Hora de ingreso</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $ingresos as $ingreso)
                <tr>
                    <td>{{ $ingreso -> propietario -> Nombre_propietario }}</td>
                    <td>{{ $ingreso -> propietario -> Apellido_propietario }}</td>
                    <td>{{ $ingreso -> fehca_ingreso }}</td>
                    <td>{{ $ingreso -> hora_ingreso }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>



        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

    </div>
    
</section>


</body>

@include('inc.footer')