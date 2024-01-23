<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion_funcion',
        'id_ocupaciones',
        'nombre_ocupacion',
    ];
}
