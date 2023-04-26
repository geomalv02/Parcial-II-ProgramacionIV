Nuevo Registro de Critica

<form action="{{ url('/critica') }}" method="POST">
    @csrf
    @include('critica.form')

</form>