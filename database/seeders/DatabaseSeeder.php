<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\HabilidadController;
use App\Models\Tipo_usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(TipoUsuarioTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(TipoContratoTableSeeder::class);
        $this->call(LocacionTableSeeder::class);
        $this->call(OcupacionTableSeeder::class);
        $this->call(FuncionTableSeeder::class);
        $this->call(DenominacionTableSeeder::class);
        $this->call(HabilidadTableSeeder::class);
        $this->call(RelacionTableSeeder::class);
        $this->call(ConocimientoTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
