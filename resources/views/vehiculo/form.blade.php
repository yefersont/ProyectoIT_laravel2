<h2> {{$modo}} Vehiculo</h2>

<body>

    <div class="form-container">
        
        
        <div class="form-column">
            <div class="form-group">
                <label for="input1">Tipo de vehiculo</label>
                <select id="input6" name="tipo_vehiculo">
                    <option value="">Selecciona una opcion...</option> <!-- Opción predeterminada -->
                    <option value="1"> Bicicleta </option>
                    <option value="2"> Moto </option>
                    <option value="3"> Carro </option>
                </select>            
        
            </div>
            
            <div class="form-group">
                <label for="input2">Placa</label>
                <input type="text" id="input2" name="placa_vehiculo" placeholder="Letras y numeros" value="{{  isset($vehiculo->placa_vehiculo)?$vehiculo->placa_vehiculo:''  }}">
            </div>    
        </div>
        <div class="form-column">
            <div class="form-group">
                <label for="input3">Marca</label>
                <input type="text" id="input3" name="Marca_vehiculo" placeholder="Marca" value="{{  isset($vehiculo->Marca_vehiculo)?$vehiculo->Marca_vehiculo:''  }}">
            </div>
            <div class="form-group">
                <label for="input4">Modelo</label>
                <input type="text" id="input4" name="Modelo_vehiculo" placeholder="Año del vehiculo" value="{{  isset($vehiculo->Modelo_vehiculo)?$vehiculo->Modelo_vehiculo:''  }}" >
            </div>
        </div>
        <div class="form-column">
            <div class="form-group">
                <label for="input5">Color</label>
                <input type="text" id="input5" name="Color_vehiculo" placeholder="Negro, blanco, etc"  value="{{  isset($vehiculo->Color_vehiculo)?$vehiculo->Color_vehiculo:''  }}" >

            </div>
            <div class="form-group">
                <label for="input6">Identificacion</label>
                <input type="text" id="input1" name="Cc_propietario_vehiculo" placeholder="Identificacion del propietario"  value="{{  isset($vehiculo->Cc_propietario_vehiculo)?$vehiculo->Cc_propietario_vehiculo:''  }}">


            </div>
        </div>
    </div>
    <div class="form-container-buttons">
        <div class="form-column">
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="{{ $modo }} vehiculo"> <!-- Botón al final de la primera columna -->
            </div>
        </div>
        <div class="form-column">
            <div class="form-group">
    
                <button type="button" class="btn btn-danger mx-4" onclick="cancelarInsercion()">Cancelar {{$modo1}}</button>
            
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