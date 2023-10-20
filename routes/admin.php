<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\MarcaController;
use App\Http\Controllers\Admin\PromocioneController;

Route::resource('categorias',CategoriaController::class)->names('admin.categorias');
Route::resource('marcas',MarcaController::class)->names('admin.marcas');
Route::resource('promociones',PromocioneController::class)->names('admin.promociones'); 
Route::resource('productos',ProductoController::class)->names('admin.productos');

// Route::get('/categorias/index', [CategoriaController::class, 'index']);
// Route::get('/productos/index', [ProductoController::class, 'index']);
// Route::post('/categorias/crear', [CategoriaController::class, 'create']);
// Route::post('/productos/crear', [ProductoController::class, 'create']);
// Route::post('/categorias/store', [CategoriaController::class, 'store']);
// Route::post('/productos/store', [ProductoController::class, 'store']);