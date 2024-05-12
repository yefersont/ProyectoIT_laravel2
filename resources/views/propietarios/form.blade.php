
<body>

    <div class="form-container">
        <div class="form-column">
            <div class="form-group">
                <label for="input1">Nombres</label>
                <input type="text" id="input1" name="Nombre_propietario" placeholder="Nombres" value="{{  isset($propietario->Nombre_propietario)?$propietario->Nombre_propietario:''  }}">
            </div>
            
            <div class="form-group">
                <label for="input2">Apellidos</label>
                <input type="text" id="input2" name="Apellido_propietario" placeholder="Apellidos" value="{{  isset($propietario->Apellido_propietario)?$propietario->Apellido_propietario:''  }}">
            </div>    
        </div>
        <div class="form-column">
            <div class="form-group">
                <label for="input3">Identificacion</label>
                <input type="text" id="input3" name="Cedula_propietario" placeholder="Numero de cedula o tarjeta de identidad" value="{{  isset($propietario->Cedula_propietario)?$propietario->Cedula_propietario:''  }}">
            </div>
            <div class="form-group">
                <label for="input4">Telefono</label>
                <input type="text" id="input4" name="telefono_propietario" placeholder="Numero de teléfono o celular" value="{{  isset($propietario->telefono_propietario)?$propietario->telefono_propietario:''  }}" >
            </div>
        </div>
        <div class="form-column">
            <div class="form-group">
                <label for="input5">Placa del vehiculo</label>
                <select type="text" id="input5" name="propietario_placa_vehiculo">

                @foreach( $vehiculos as $vehiculo)
                    <option value="{{ $vehiculo -> idVehiculo }}"> {{ $vehiculo -> placa_vehiculo }} </option>
                @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="input6">Rol</label>
                <select id="input6" name="Rol">
                    <option value="">Seleccione un rol...</option> <!-- Opción predeterminada -->
                    <option value="1"> Estudiante </option>
                    <option value="2"> Docente </option>
                    <option value="3"> Administrativo </option>
                    <option value="4"> Trabajador </option>
                </select>
            
            
            </div>
        </div>
    </div>
    <div class="form-container-buttons">
        <div class="form-column">
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="{{ $modo }} Propietario"> <!-- Botón al final de la primera columna -->
            </div>
        </div>
        <div class="form-column">
            <div class="form-group">
    
            <button type="button" class="btn btn-danger mx-4" onclick="cancelarInsercion()">Cancelar</button>
            
            <script>
            function cancelarInsercion() {
                    if (confirm('¿Estás seguro de que deseas cancelar la inserción?')) {
                        window.history.back(); // Devuelve a la vista anterior
                    }
                }

            </script>

            </div>
        </div>
    </div>
</body>