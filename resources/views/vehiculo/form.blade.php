<body>
    <div class="container mt-5">
        <h2>{{ $modo }} Vehículo</h2>
        <form action="{{ url('/vehiculo') }}" method="post">
            @csrf

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="input1">Tipo de vehículo</label>
                        <select id="input1" name="tipo_vehiculo" class="form-control">
                            <option value="">Selecciona una opción...</option>
                            <option value="1">Bicicleta</option>
                            <option value="2">Moto</option>
                            <option value="3">Carro</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="input2">Placa</label>
                        <input type="text" id="input2" name="placa_vehiculo" class="form-control"
                            placeholder="Letras y números"
                            value="{{ isset($vehiculo->placa_vehiculo) ? $vehiculo->placa_vehiculo : '' }}">
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="input3">Marca</label>
                        <input type="text" id="input3" name="Marca_vehiculo" class="form-control"
                            placeholder="Marca"
                            value="{{ isset($vehiculo->Marca_vehiculo) ? $vehiculo->Marca_vehiculo : '' }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="input4">Modelo</label>
                        <input type="text" id="input4" name="Modelo_vehiculo" class="form-control"
                            placeholder="Año del vehículo"
                            value="{{ isset($vehiculo->Modelo_vehiculo) ? $vehiculo->Modelo_vehiculo : '' }}">
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="input5">Color</label>
                        <input type="text" id="input5" name="Color_vehiculo" class="form-control"
                            placeholder="Negro, blanco, etc."
                            value="{{ isset($vehiculo->Color_vehiculo) ? $vehiculo->Color_vehiculo : '' }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="input6">Identificación Propietario</label>
                        <input type="text" id="input6" name="Cc_propietario_vehiculo" class="form-control"
                            placeholder="Identificación del propietario"
                            value="{{ isset($vehiculo->Cc_propietario_vehiculo) ? $vehiculo->Cc_propietario_vehiculo : '' }}">
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <input type="submit" class="btn btn-success me-2 w-25" value="{{ $modo }} vehiculo">
                <button type="button" class="btn btn-danger w-25" onclick="cancelarInsercion()">Cancelar</button>
             </div>
        </form>
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        function cancelarInsercion() {
            if (confirm('¿Estás seguro de que deseas cancelar la inserción?')) {
                window.history.back(); // Devuelve a la vista anterior
            }
        }
    </script>
</body>