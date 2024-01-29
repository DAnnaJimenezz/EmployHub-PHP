<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conocimiento extends Model
{
    use HasFactory;

    protected $table = 'conocimientos'; 

    protected $fillable = [
        'nombre_conocimiento',
        'descripcion_conocimiento',
        'id_ocupaciones',
        'nombre_ocupacion',
    ];
}
