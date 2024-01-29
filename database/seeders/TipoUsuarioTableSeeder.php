<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.,
     *
     * @return void
     */
    public function run()
    {
        $tipo_usuarios = [
            ['nombre_tipo_usuario' => 'ADMINISTRADOR'],
            ['nombre_tipo_usuario' => 'SELECCIONADOR'],
            ['nombre_tipo_usuario' => 'RECLUTADOR'],
            ['nombre_tipo_usuario' => 'CANDIDATO'],
            ['nombre_tipo_usuario' => 'EMPRESA']
        ];

        DB::table('tipo_usuarios')->insert($tipo_usuarios);

        $this->call(AdminTableSeeder::class);
    }
}
