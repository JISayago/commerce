<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos"; 

    public function users(){
        return $this->belongsToMany(User::class, 'user_producto');
    }

    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'producto_categoria');
    }

    public function marca(){
        return $this->belongsTo(Marca::class, 'marca_id');
    }
}
