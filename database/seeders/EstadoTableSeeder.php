<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            ['nombre_estado' => 'EN PROGRESO', 'descripcion_estado' => 'Significa que el candidato o el proceso de selección aún no ha llegado a una conclusión. Puede estar en las etapas iniciales de revisión de currículum, pruebas o cualquier fase preliminar del proceso de contratación.'],
            ['nombre_estado' => 'EN CONTRATO', 'descripcion_estado' => 'Indica que el candidato ha avanzado lo suficiente en el proceso de selección como para haber firmado un contrato, pero aún no ha comenzado formalmente a trabajar.'],
            ['nombre_estado' => 'ENTREVISTA', 'descripcion_estado' => 'El candidato ha sido seleccionado para una entrevista. Puede ser una etapa intermedia del proceso de selección, donde se evalúan las habilidades y aptitudes de los candidatos.'],
            ['nombre_estado' => 'PRESELECCIONADO', 'descripcion_estado' => 'Implica que el candidato ha superado con éxito algunas rondas de selección y está entre los finalistas para el puesto, pero aún no ha recibido una oferta formal.'],
            ['nombre_estado' => 'CONTRATADO', 'descripcion_estado' => 'Indica que el candidato ha sido seleccionado y ha aceptado la oferta de trabajo. En este punto, se espera que el empleado comience sus funciones según los términos del contrato.'],
            ['nombre_estado' => 'RECHAZADO', 'descripcion_estado' => 'El candidato no fue seleccionado para el puesto. Puede ser debido a diversas razones, como falta de habilidades requeridas, experiencia o la presencia de candidatos más adecuados.'],
        ];
    
        DB::table('estados')->insert($estados);
    
    }
    
}
