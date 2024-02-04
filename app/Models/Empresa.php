<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
        'nombre_empresa',
        'representante_legal',
        'tipo_empresa',
        'NIT',
        'numero_trabajadores',
        'correo_representante_legal',
        'naturaleza',
        'correo_empresa',
        'telefono_empresa',
        'telefono_alternativo_empresa',
        'gerente_recursos_humanos',
        'telefono_alternativo_gerente',
        'telefono_alternativo_2_gerente',
        'correo_gerente',
        'id_cargo',
        'id_tipo_usuario',
    ];

    public function userType()
    {
        return $this->belongsTo(Tipo_usuario::class, 'id_tipo_usuario');
    }
}
