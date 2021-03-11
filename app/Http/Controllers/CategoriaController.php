<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // listar
        $lista_categorias = Categoria::get();
        return view("categoria.listar", compact("lista_categorias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostrar o cargar el formulario html para crear un nuevo registro
        return view("categoria.crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validar
        //return $request;

        // guardar los datos ($request) en la base de datos despues de validar
        $categoria = new Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        return redirect("/categoria");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Mostrar un registro
        $categoria = Categoria::find($id);
        return view("categoria.mostrar", compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Cargar el formulario de edición de un registro
        $categoria = Categoria::find($id);
        return view("categoria.editar", compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Modificar un registro con los datos ($request)
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        return redirect("/categoria");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar un registro por id
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect("/categoria");
    }
}
