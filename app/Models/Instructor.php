<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructores'; 

    protected $fillable = [
        'tipo_documento',
        'numero_documento',
        'nombre_instructor',
        'apellido_instructor',
        'correo_electronico',
        'contraseña',
        'id_administrador',
    ];

    public function administrador()
    {
        return $this->belongsTo(Administrator::class, 'id_administrador');
    }
}
