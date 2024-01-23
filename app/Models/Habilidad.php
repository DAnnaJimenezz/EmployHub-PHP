<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_habilidad',
        'descripcion_habilidad',
        'id_ocupaciones',
        'nombre_ocupacion'
    ];
}
