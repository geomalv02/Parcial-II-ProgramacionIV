Nuevo Registro de Pelicula

<form action="{{ url('/peliculas') }}" method="POST">
    
    @csrf
    @include('peliculas.show')
</form>
