<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seleccionador extends Model
{
    use HasFactory;

    protected $table = 'seleccionadores';

    protected $fillable = [
        'numero_documento_selector',
        'tipo_documento_selector',
        'nombre_selector',
        'telefono_selector',
        'correo_electronico_selector',
        'id_tipo_usuario',
    ];

    public function userType()
    {
        return $this->belongsTo(Tipo_usuario::class, 'id_tipo_usuario');
    }
}
