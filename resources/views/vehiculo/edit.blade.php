@include('inc.header')


<form action="{{ url('/vehiculos/'.$vehiculo -> idVehiculo) }}" method="post">

@csrf

{{ method_field('PATCH') }}


@include('vehiculo.form',['modo'=>'Actualizar','modo1'=>'Actualizacion'])


</form>



@include('inc.footer')