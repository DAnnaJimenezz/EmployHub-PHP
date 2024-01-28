<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [
            'nombre_usuario' => 'AdminCide',
            'correo_electronico' => 'admincide@example.com',
            'contraseña' => Hash::make('Cide899999034-1'),
            'id_tipo_usuario' => 1,
        ];

        Usuario::create($adminUser);
    }
}
