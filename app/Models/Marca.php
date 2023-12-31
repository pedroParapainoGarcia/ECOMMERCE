<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre'=>'required',     
         
    ];

    //relacion uno a muchos marca-productos
    public function marcas(){
        return $this->hasMany(Producto::class,'id');
    }

}
