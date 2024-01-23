<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponderacion extends Model
{
    use HasFactory;

    protected $table = 'ponderaciones';

    protected $fillable = [
        'idiomas',
        'educacion',
        'experiencia_laboral',
        'habilidades_tecnicas',
        'proyecto_anterior',
        'referencias',
        'curso_adicional',
        'id_pesajes',
    ];

    public function ponderacion()
    {
        return $this->belongsTo(Ponderacion::class, 'id_ponderacion');
    }
}
