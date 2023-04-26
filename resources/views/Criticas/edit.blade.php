Editar Registro de Critica

<form action="{{ url('/critica/'. $critica->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('critica.form')

</form>