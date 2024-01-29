<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclutador extends Model
{
    use HasFactory;

    protected $table = 'reclutadores';

    protected $fillable = [
        'numero_documento',
        'tipo_documento',
        'nombre',
        'telefono',
        'correo_electronico',
        'id_tipo_usuario',
    ];
}
