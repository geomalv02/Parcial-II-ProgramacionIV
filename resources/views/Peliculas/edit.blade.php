Editar Registro de Peliculas

<form action="{{ url('/peliculas/'.$peliculas->id) }}" method="POST">
    
    @csrf
    {{ method_field('PATCH') }}
    @include('peliculas.show')
</form>