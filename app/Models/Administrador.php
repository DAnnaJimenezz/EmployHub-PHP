<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_documento',
        'tipo_documento',
        'nombre',
        'apellido',
        'correo_electronico',
        'contrasena',
        'id_tipos_usuario',
    ];
}
