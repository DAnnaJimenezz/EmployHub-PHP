<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructores'; 

    protected $fillable = [
        'tipo_documento',
        'numero_documento',
        'nombre_instructor',
        'apellido_instructor',
        'correo_electronico',
        'contrasena',
        'id_administradores',
    ];
}
