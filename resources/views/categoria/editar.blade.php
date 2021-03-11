<h1>Editar Registro Categoria</h1>


<form action="/categoria/{{ $categoria->id }}" method="post">
    @csrf
    @Method('PUT')
    <label for="">Ingrese Nombre:</label>
    <input type="text" name="nombre" value="{{ $categoria->nombre }}">
    <br>

    <label for="">Ingrese Descripcion:</label>
    <textarea name="descripcion">{{ $categoria->descripcion }}</textarea>
    <br>
    <input type="submit" value="Modificar Categoria">
</form>