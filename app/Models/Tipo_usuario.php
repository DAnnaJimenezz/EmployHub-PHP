<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Tipo_usuario extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'tipo_usuarios';

    protected $fillable = [
        'nombre_tipo_usuario',
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_tipo_usuario', 'id');
    }

    public function tipoUsuario()
    {
        return $this->belongsTo(Tipo_usuario::class, 'id_tipo_usuario');
    }
}
