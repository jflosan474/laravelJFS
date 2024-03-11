<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chollo extends Model
{
    use HasFactory; 
     protected $table = 'chollos';
     protected $fillable = [
        'titulo',
        'descripcion',
        'url',
        'categoria',
        'puntuacion',
        'precio',
        'precio_descuento',
        'disponible',
        'imagen', ];
}
