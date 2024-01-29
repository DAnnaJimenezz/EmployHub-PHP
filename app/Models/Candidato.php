<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $table = 'candidatos';

    protected $fillable = [
        'numero_documento',
        'tipo_documento',
        'nombre',
        'telefono',
        'correo_electronico',
        'id_hoja_vida',
        'id_estado',
    ];
}
