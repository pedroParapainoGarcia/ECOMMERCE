<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('admin.marcas.index', compact('marcas'));
    }


    public function create()
    {
        return view('admin.marcas.crear');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'nombre' => 'required',
        ]);

        $marcas = new Marca();
        $marcas->nombre = $request->get('nombre');
        $marcas->save();

       return redirect()->route('admin.marcas.index');
    }


    public function edit(string $id)
    {
        $marcas = Marca::find($id);
        return view('admin.marcas.editar')->with('marcas', $marcas);
    }


    public function update(Request $request, string $id)
    {
        $marcas = Marca::find($id);
        $marcas->nombre = $request->get('nombre');
        $marcas->save();

        return redirect()->route('admin.marcas.index');
    }


    public function destroy(string $id)
    {
        $marcas = Marca::find($id);
        $marcas->delete();
        return redirect()->route('admin.marcas.index');
    }
}
