<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', compact('categorias'));
    }


    public function create()
    {
        return view('admin.categorias.crear');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'nombre' => 'required',
        ]);

        $categorias = new Categoria();
        $categorias->nombre = $request->get('nombre');
        $categorias->save();

       return redirect()->route('admin.categorias.index');
    }


    public function edit(string $id)
    {
        $categorias = Categoria::find($id);
        return view('admin.categorias.editar')->with('categorias', $categorias);
    }


    public function update(Request $request, string $id)
    {
        $categorias = Categoria::find($id);
        $categorias->nombre = $request->get('nombre');
        $categorias->save();

        return redirect()->route('admin.categorias.index');
    }


    public function destroy(string $id)
    {
        $categorias = Categoria::find($id);
        $categorias->delete();
        return redirect()->route('admin.categorias.index');
    }
}
