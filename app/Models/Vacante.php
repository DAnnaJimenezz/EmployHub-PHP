<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected $table = 'vacantes';

    protected $fillable = [
        'numero_vacantes_aplicadas',
        'id_ofertas',
        'id_localidades',
        'id_tipos_contrato',
        'id_pesajes',
    ];

    public function oferta()
    {
        return $this->belongsTo(Oferta::class, 'id_ofertas');
    }

    public function localidad()
    {
        return $this->belongsTo(Localidad::class, 'id_localidades');
    }

    public function tipoContrato()
    {
        return $this->belongsTo(Tipo_contrato::class, 'id_tipos_contrato');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo');
    }
}
