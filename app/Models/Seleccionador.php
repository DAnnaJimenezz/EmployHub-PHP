<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seleccionador extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_documento_selector',
        'tipo_documento_selector',
        'nombre_selector',
        'telefono_selector',
        'correo_electronico_selector',
        'id_tipos_usuario',
    ];
}
