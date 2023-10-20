<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Http\Controllers\Api\CategoriaController;
use App\Models\Marca;
use App\Models\Promocione;

class ProductoController extends Controller
{
    public function index()
    {

        $categorias = Categoria::all();
        $marcas = Marca::all();
        $promociones = Promocione::all();
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos', 'categorias', 'marcas', 'promociones'));
    }


    public function create()
    {
        $producto = new Producto();
        $marcas = Marca::all();
        $promociones = Promocione::all();
        $categorias = Categoria::all();

        return view('admin.productos.crear', compact('producto', 'categorias', 'marcas', 'promociones'));
    }


    public function store(Request $request)
    {
        

        $this->validate(request(), [
            'nombre' => 'required',
            'descripcion' => 'required',
            'preciocompra' => 'required',
            'precioventa' => 'required',
            'stock'=>'required',
            'id_categoria' => 'required',
            'id_marca' => 'required',
            'id_promocion' => 'required',

        ]);

        $producto = new Producto();
        $producto->nombre = $request->get('nombre');
        $producto->descripcion = $request->get('descripcion');
        $producto->preciocompra = $request->get('preciocompra');
        $producto->precioventa = $request->get('precioventa');
        $producto->stock = $request->get('stock');
        $producto->id_categoria = $request->get('id_categoria');
        $producto->id_marca = $request->get('id_marca');
        $producto->id_promocion = $request->get('id_promocion');
        $producto->save();



        return redirect()->route('admin.productos.index');
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        $categoria = Categoria::all();
        $marcas = Marca::all();
        $promociones = Promocione::all();
        return view('admin.productos.editar', compact('producto', 'categoria','marcas','promociones'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'nombre' => 'required',
            'descripcion' => 'required',
            'preciocompra' => 'required',
            'precioventa' => 'required',
            'stock'=>'required',
            'id_categoria' => 'required',
            'id_marca' => 'required',
            'id_promocion' => 'required',

        ]);

        $input = $request->all();
        $producto = Producto::find($id);
        $producto->update($input);
        $producto->save();
        return redirect()->route('admin.productos.index');
    }


    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('admin.productos.index');
    }
}
