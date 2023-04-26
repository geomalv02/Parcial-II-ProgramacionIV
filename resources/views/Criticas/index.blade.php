Listado de Criticas
<a href="{{ url('peliculas/create') }}">agregar</a>
<table>
    <thead>
        <th>#</th>
        <th>Titulo de Critica</th>
        <th>Critico</th>
        <th>Fecha de lanzamiento</th>
        <th>Genero</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($criticas as $critica)
            <tr>
                <td>{{ $peli->id }}</td>
                <td>{{ $peli->titulo }}</td>
                <td>{{ $peli->director }}</td>
                <td>{{ $peli->año }}</td>
                <td>{{ $peli-> genero }} </td>
                <form action="{{ url('/criticas/'.$critica->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <td>
                        <a href="{{ route('criticas.edit', $critica->id) }}">editar  </a>
                        <input type="submit" onclick="return confirm('Desea borrar el registro?')" 
                        value="Eliminar" />
                    </td>
                </form>
                
            </tr>
        @endforeach
    </tbody>
</table>