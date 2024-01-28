<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localidades = [
            ['nombre_localidad' => 'Bogotá'],
            ['nombre_localidad' => 'Medellín'],
            ['nombre_localidad' => 'Cali'],
            ['nombre_localidad' => 'Barranquilla'],
            ['nombre_localidad' => 'Cartagena'],
            ['nombre_localidad' => 'Cúcuta'],
            ['nombre_localidad' => 'Valledupar'],
            ['nombre_localidad' => 'Bucaramanga'],
            ['nombre_localidad' => 'Pereira'],
            ['nombre_localidad' => 'Manizales'],
            ['nombre_localidad' => 'Popayán'],
            ['nombre_localidad' => 'Montería'],
            ['nombre_localidad' => 'Santa Marta'],
            ['nombre_localidad' => 'Armenia'],
            ['nombre_localidad' => 'Villavicencio'],
            ['nombre_localidad' => 'Ibagué'],
            ['nombre_localidad' => 'Neiva'],
            ['nombre_localidad' => 'Pasto'],
        ];
    
        DB::table('localidades')->insert($localidades);
    }
    
}
