<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    use HasFactory;

    protected $table = 'relaciones'; 

    protected $fillable = [
        'nombre_relacionado_ocupacion',
        'id_ocupaciones',
        'nombre_ocupacion',
    ];
}
