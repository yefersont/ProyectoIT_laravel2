@include('inc.header')

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h1 class="text-center mb-4">Estadísticas de Ingresos</h1>
        <form method="POST" action="/estadisticas">
          @csrf
          <div class="form-group row">
            <div class="col-md-6">
              <label for="fecha">Selecciona el Día</label>
              <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="col-md-6">
              <label for="jornada">Selecciona la Jornada</label>
              <select class="form-control" id="jornada" name="jornada" required>
                <option value="mañana">Mañana</option>
                <option value="tarde">Tarde</option>
                <option value="noche">Noche</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Ver Estadísticas</button>
        </form>
        <div class="mt-5">
          <h2>Resultados</h2>
 
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@include('inc.footer')