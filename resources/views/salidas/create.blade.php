
<form action="{{ url('/salidas') }}" method="post">
    
    @csrf

    @include('salidas.form')

</form>
                
