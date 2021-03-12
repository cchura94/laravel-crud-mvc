@extends("layouts.admin")

@section("contenedor")
<div class="row">
<h1>Listar</h1>

<a href="/categoria/create" class="btn btn-primary">Nueva Categoria</a>

<table class="table table-hover table-striped">
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>DESCRIPCION</td>
        <td>ACCIONES</td>
    </tr>
    @foreach($lista_categorias as $cat)
    <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->nombre }}</td>
        <td>{{ $cat->descripcion }}</td>
        <td>
            <a href="/categoria/{{ $cat->id }}/edit" class="btn btn-warning">Editar</a>
            <a href="/categoria/{{ $cat->id }}" class="btn btn-success">Mostrar</a>

            <form action="/categoria/{{ $cat->id }}" method="post" style="display:inline">
                @csrf
                @Method("DELETE")
                <input type="submit" value="eliminar" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
</table>

</div>


@endsection