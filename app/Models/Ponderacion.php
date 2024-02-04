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
    ];
}
