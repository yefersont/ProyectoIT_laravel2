
@include('inc.header')




<form action="{{ url('/propietario') }}" method="post" enctype="multipart/form-data">
    
    @csrf
    @include('propietarios.form', ['modo'=>'Registrar'])
    


</form>
                

@include('inc.footer')