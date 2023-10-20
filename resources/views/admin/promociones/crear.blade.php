@extends('adminlte::page')

@section('title', 'Ecommerce')

@section('content_header')
<h1>Crear Nueva Promocion</h1>
@stop

@section('content')
<form action="{{ route ('admin.promociones.store')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input autocomplete="off" id="nombre" name="nombre" type="text" class="form-control" tabindex="1" 
    placeholder="Ingrese el nombre de la promo">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input autocomplete="off" id="precio" name="precio" type="number" class="form-control" tabindex="1" 
    placeholder="Ingrese el precio de la promo">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">FechaInicio</label>
    <input autocomplete="off" id="fechainicio" name="fechainicio" type="date" class="form-control" tabindex="1" 
    placeholder="Ingrese la fecha de inicio">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">FechaFin</label>
    <input autocomplete="off" id="fechafin" name="fechafin" type="date" class="form-control" tabindex="1" 
    placeholder="Ingrese la fecha de finalizacion">    
  </div>
  
  <a href="{{ route('admin.promociones.index')}}" class="btn btn-secondary" tabindex="2">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop