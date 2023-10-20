<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promocione;

class PromocioneController extends Controller
{
    public function index()
    {
        $promociones = Promocione::all();
        return view('admin.promociones.index', compact('promociones'));
    }


    public function create()
    {
        return view('admin.promociones.crear');
    }

    public function store(Request $request)
    {
        
        $this->validate(request(), [
            'nombre' => 'required',
            'precio' => 'required',
            'fechainicio' => 'required',
            'fechafin' => 'required',
        ]);

        $promociones = new Promocione();
        $promociones->nombre = $request->get('nombre');
        $promociones->precio = $request->get('precio');
        $promociones->fechainicio = $request->get('fechainicio');
        $promociones->fechafin = $request->get('fechafin');
        $promociones->save();

       return redirect()->route('admin.promociones.index');
    }


    public function edit(string $id)
    {
        $promociones = Promocione::find($id);
        return view('admin.promociones.editar')->with('promociones', $promociones);
    }


    public function update(Request $request, string $id)
    {
        $promociones = Promocione::find($id);
        $promociones->nombre = $request->get('nombre');
        $promociones->precio = $request->get('precio');
        $promociones->fechainicio = $request->get('fechainicio');
        $promociones->fechafin = $request->get('fechafin');
        $promociones->save();

        return redirect()->route('admin.promociones.index');
    }


    public function destroy(string $id)
    {
        $promociones = Promocione::find($id);
        $promociones->delete();
        return redirect()->route('admin.promociones.index');
    }
}
