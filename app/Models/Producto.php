<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory; 
    protected $fillable = [
        'nombre'=>'required',
        'descripcion'=>'required',
        'preciocompra'=>'required',
        'precioventa'=>'required',
        'stock'=>'required',
        'id_categoria'=>'required',
        'id_marca'=>'required',
        'id_promocion'=>'required',

    ];
    //relacion uno a muchos categorias-productos (inversa)
    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

      //relacion uno a muchos marcas-productos (inversa)
      public function marcas()
      {
          return $this->belongsTo(Marca::class, 'id_marca');
      }

        //relacion uno a muchos promociones-productos (inversa)
    public function promociones()
    {
        return $this->belongsTo(Promocione::class, 'id_promocion');
    }
}


