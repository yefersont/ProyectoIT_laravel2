



<form action="{{ url('/ingreso') }}" method="post">
    
    @csrf

    @include('ingresos.form')

</form>
                
