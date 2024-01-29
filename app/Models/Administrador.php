<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'administradores'; 


    protected $fillable = [
        'numero_documento',
        'tipo_documento',
        'nombre',
        'apellido',
        'correo_electronico',
        'contraseña',
        'id_tipo_usuario',
    ];
}
