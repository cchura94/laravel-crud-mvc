<h1>Crear nuevo Registro</h1>

<form action="/categoria" method="post">
    @csrf
    <label for="">Ingrese Nombre:</label>
    <input type="text" name="nombre">
    <br>

    <label for="">Ingrese Descripcion:</label>
    <textarea name="descripcion"></textarea>
    <br>
    <input type="submit" value="Guardar Categoria">
</form>