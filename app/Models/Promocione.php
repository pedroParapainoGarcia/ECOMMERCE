<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocione extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre'=>'required', 
        'precio'=>'required', 
        'fechainicio'=>'required', 
        'fechafin'=>'required',     
         
    ];

    //relacion uno a muchos promociones-productos
    public function productos(){
        return $this->hasMany(Producto::class,'id');
    }
}

