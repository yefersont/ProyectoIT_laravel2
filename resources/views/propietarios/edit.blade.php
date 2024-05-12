@include('inc.header')

<form action="{{ url('/propietario/'.$propietario -> idPropietario) }}" method="post">
@csrf

{{ method_field('PATCH') }}

@include('propietarios.form',['modo'=>'Actualizar'])

</form>

@include('inc.footer')

