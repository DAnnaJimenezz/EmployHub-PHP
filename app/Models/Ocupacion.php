<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{
    use HasFactory;

    protected $table = 'ocupaciones'; 

    protected $fillable = [
        'nombre_ocupacion',
        'descripcion_ocupacion',
        'id_cargo'
    ];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
}
