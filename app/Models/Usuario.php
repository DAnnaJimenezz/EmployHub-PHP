<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Usuario extends Model
{
    use HasFactory;

    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre_usuario',
        'id_tipos_usuario',
        'correo_electronico',
        'contrasena',
    ];

    public function tipo_usuario()
    {
        return $this->belongsTo(Tipo_usuario::class, 'id_tipos_usuario', 'id');
    }

    protected $casts = [
        'correo_verificado_en' => 'datetime',
    ];
}
