<h1>Mostrar un Registro por ID</h1>


    <label for="">Ingrese Nombre:</label>
    <input type="text" name="nombre" value="{{ $categoria->nombre }}" disabled>
    <br>

    <label for="">Ingrese Descripcion:</label>
    <textarea name="descripcion" disabled>{{ $categoria->descripcion }}</textarea>
    
