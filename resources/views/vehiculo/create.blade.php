@include('inc.header')

<form action="{{ url('/vehiculos') }}" method="post">

@csrf


@include('vehiculo.form',['modo'=>'Registar'],['modo1'=>'Registro'])

</form>

@include('inc.footer')