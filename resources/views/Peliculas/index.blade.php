Listado de Peliculas
<a href="{{ url('peliculas/create') }}">agregar</a>
<table>
    <thead>
        <th>#</th>
        <th>Titulo</th>
        <th>Director</th>
        <th>Año de lanzamiento</th>
        <th>Genero</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($peliculas as $peli)
            <tr>
                <td>{{ $peli->id }}</td>
                <td>{{ $peli->titulo }}</td>
                <td>{{ $peli->director }}</td>
                <td>{{ $peli->año }}</td>
                <td>{{ $peli-> genero }} </td>
                <form action="{{ url('/peliculas/'.$peli->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <td>
                        <a href="{{ route('peliculas.edit', $peli->id) }}">editar  </a>
                        <input type="submit" onclick="return confirm('Desea borrar el registro?')" 
                        value="Eliminar" />
                    </td>
                </form>
                
            </tr>
        @endforeach
    </tbody>
</table>