@extends("layouts.admin")

@section("contenedor")

<h1>Crear nuevo Registro</h1>

<form action="/categoria" method="post">
    @csrf
    <label for="">Ingrese Nombre:</label>
    <input type="text" name="nombre" class="form-control">
    <br>

    <label for="">Ingrese Descripcion:</label>
    <textarea name="descripcion" class="form-control"></textarea>
    <br>
    <input type="submit" value="Guardar Categoria" class="btn btn-success">
</form>

@endsection