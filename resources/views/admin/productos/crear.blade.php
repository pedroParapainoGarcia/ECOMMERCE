@extends('adminlte::page')

@section('title', 'Ecommerce')

@section('content_header')
<h1>Crear Nuevo Producto</h1>
@stop

@section('content')
<form action="{{ route ('admin.productos.store')}}" method="POST">
  @csrf

  <div class="row">

        {{-- 'nombre' => 'required',
            'descripcion' => 'required',
            'preciocompra' => 'required',
            'precioventa' => 'required',
            'stock'=>'required',
            'id_categoria' => 'required',
            'id_marca' => 'required',
            'id_promocion' => 'required', --}}
    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
        <label for="" class="form-label">Nombre</label>
        <input autocomplete="off" id="nombre" name="nombre" type="text" class="form-control" tabindex="1"
          placeholder="Ingrese el nombre del producto">
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
        <label for="" class="form-label">Descripcion</label>
        <input autocomplete="off" id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1"
          placeholder="Ingrese la descripcion del producto">
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
        <label for="" class="form-label">PrecioCompra</label>
        <input autocomplete="off" id="preciocompra" name="preciocompra" type="number"  class="form-control" tabindex="1"
        value="0.00">
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
        <label for="" class="form-label">PrecioVenta</label>
        <input autocomplete="off" id="precioventa" name="precioventa" type="number" class="form-control" tabindex="1"
          placeholder="Ingrese el precio de venta">
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
        <label for="" class="form-label">Stock</label>
        <input autocomplete="off" id="stock" name="stock" type="number" class="form-control" tabindex="1"
        value="0.00">
      </div>
    </div>
    
   
    <div class="col-xs-12 col-sm-12 col-md-6">
      <label for="id_cliente">Categoria</label>
      <select required class="form-control" name="id_categoria" id="id_categoria">
          @foreach($categorias as $categoria)
          
          <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
          @endforeach
      </select>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6">
      <label for="id_cliente">Marca</label>
      <select required class="form-control" name="id_marca" id="id_marca">
          @foreach($marcas as $marca)
          
          <option value="{{$marca->id}}">{{$marca->nombre}}</option>
          @endforeach
      </select>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6">
      <label for="id_promocion">Promo</label>
      <select required class="form-control" name="id_promocion" id="id_promocion">
          @foreach($promociones as $promo)
          
          <option value="{{$promo->id}}">{{$promo->nombre}}</option>
          @endforeach
      </select>
    </div>
  

   
  </div>
  <a href="{{ route('admin.productos.index')}}" class="btn btn-secondary" tabindex="3">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop