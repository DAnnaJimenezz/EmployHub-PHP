<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargos';

    protected $fillable = [
        'nombre_cargo',
        'descripccion',
    ];

    public function ocupaciones()
    {
        return $this->hasMany(Ocupacion::class);
    }
}
