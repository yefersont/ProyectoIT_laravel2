
<section id="main-section">

<div class="container mt-5">
    <h2 class="mb-4">{{ $modo }} Propietario</h2>
    <form action="" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="input1" class="form-label">Nombres</label>
                <input type="text" id="input1" name="Nombre_propietario" class="form-control w-75" placeholder="Nombres" value="{{ isset($propietario->Nombre_propietario) ? $propietario->Nombre_propietario : '' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input2" class="form-label">Apellidos</label>
                <input type="text" id="input2" name="Apellido_propietario" class="form-control w-75" placeholder="Apellidos" value="{{ isset($propietario->Apellido_propietario) ? $propietario->Apellido_propietario : '' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input3" class="form-label">Identificación</label>
                <input type="text" data-input-numerico id="input3" name="Cedula_propietario" class="form-control w-75" required placeholder="Número de cédula o tarjeta de identidad" value="{{ isset($propietario->Cedula_propietario) ? $propietario->Cedula_propietario : '' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="input4" class="form-label">Teléfono</label>
                <input type="text" data-input-numerico id="input4" name="telefono_propietario" class="form-control w-75" placeholder="Número de teléfono o celular" value="{{ isset($propietario->telefono_propietario) ? $propietario->telefono_propietario : '' }}">
            </div>
            <div class="col-md-6 mb-3">
                <?php 
                $placa="";
                if(isset($propietario)){
                    $placa = $propietario->vehiculo->placa_vehiculo;
                }
                ?>
                <label for="input5" class="form-label">Placa del vehículo</label>
                <select id="input5" name="propietario_placa_vehiculo" class="form-select w-75">
                    <option value="">Seleccione una placa...</option>
                    @foreach($vehiculos as $vehiculo)
                        <?php 
                        $sel = "";
                        if($placa == $vehiculo->placa_vehiculo){
                            $sel = "selected";
                        }
                        ?>
                        <option value="{{ $vehiculo->idVehiculo }}" <?php echo $sel; ?>>{{ $vehiculo->placa_vehiculo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input6" class="form-label">Rol</label>
                <select id="input6" name="Rol" class="form-select w-75">
                    <option value=""></option> <!-- Opción predeterminada -->
                    <option value="1" <?php echo (isset($propietario) && $propietario->rol->Rol == 'Estudiante') ? "selected" : ""; ?>>Estudiante</option>
                    <option value="2" <?php echo (isset($propietario) && $propietario->rol->Rol == 'Docente') ? "selected" : ""; ?>>Docente</option>
                    <option value="3" <?php echo (isset($propietario) && $propietario->rol->Rol == 'Administrativo') ? "selected" : ""; ?>>Administrativo</option>
                    <option value="4" <?php echo (isset($propietario) && $propietario->rol->Rol == 'Trabajador') ? "selected" : ""; ?>>Trabajador</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <input type="submit" class="btn btn-success me-2 w-25" value="{{ $modo }} Propietario">
            <button type="button" class="btn btn-danger w-25" onclick="cancelarInsercion()">Cancelar</button>
        </div>
    </form>
</div>

</section>

<script>
    function cancelarInsercion() {
        if (confirm('¿Estás seguro de que deseas cancelar la inserción?')) {
            window.history.back(); // Devuelve a la vista anterior
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        var inputsNumericos = document.querySelectorAll("[data-input-numerico]");

        inputsNumericos.forEach(function(input) {
            input.addEventListener("keypress", function(event) {
                var charCode = event.which ? event.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    event.preventDefault();
                }
            });
        });
    });
</script>



