@extends('adminlte::page')

@section('title', 'Ecommerce')

@section('content_header')
    <h1>Editar  Promociones</h1>
@stop

@section('content')
   <form action="{{ route ('admin.promociones.update',$promociones->id)}}" method="POST">      
   @csrf
   @method('PUT')
 
  <div class="mb-3">
    <label for="" class="form-label">Nombre de Promo</label>
    <input autocomplete="off"  id="nombre" name="nombre" type="text" class="form-control" value="{{$promociones->nombre}}">
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input autocomplete="off" id="precio" name="precio" type="number" class="form-control" value="{{$promociones->precio}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">FechaInicio</label>
    <input autocomplete="off" id="fechainicio" name="fechainicio" type="date" class="form-control" value="{{$promociones->fechainicio}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">FechaFin</label>
    <input autocomplete="off" id="fechafin" name="fechafin" type="date" class="form-control" value="{{$promociones->fechafin}}">    
  </div>

  
  <a href="{{ route('admin.promociones.index')}}" class="btn btn-secondary" tabindex="3">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop