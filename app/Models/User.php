<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable, HasApiTokens, HasFactory, Notifiable;


    protected $table = 'users';

    protected $fillable = [
        'username',
        'id_tipo_usuario',
        'correo_electronico',
        'password',
    ];

    public function tipoUsuario()
    {
        return $this->belongsTo(Tipo_usuario::class, 'id_tipo_usuario', 'id');
    }

    protected $casts = [
        'correo_verificado_en' => 'datetime',
    ];
}
