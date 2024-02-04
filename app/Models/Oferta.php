<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $table = 'ofertas';

    protected $fillable = [
        'nombre_vacante',
        'descripcion_vacante',
        'nombre_empresa',
        'direccion',
        'salario',
        'fecha_inicio',
        'fecha_fin',
        'meses_experiencia',
        'id_tipos_contrato',
        'requisitos',
    ];

    public function tipo_contratos()
    {
        return $this->belongsTo(Tipo_contrato::class, 'id_tipos_contrato');
    }
}
