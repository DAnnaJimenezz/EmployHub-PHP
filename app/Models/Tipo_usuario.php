<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_tipo_usuario',
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_tipos_usuario', 'id');
    }

    public function tipoUsuario()
    {
        return $this->belongsTo(Tipo_usuario::class, 'id_tipos_usuario');
    }
}
