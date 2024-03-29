<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoja_vida extends Model
{
    use HasFactory;

    protected $table = 'hoja_vidas';

    protected $fillable = [
        'descripcion_personal',
        'idiomas',
        'experiencia',
        'educacion',
    ];
    
}
