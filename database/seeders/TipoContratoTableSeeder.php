<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoContratoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_contratos = [
            ['nombre_contrato' => 'Contrato de trabajo indefinido', 'descripcion' => 'Es un acuerdo laboral sin una fecha de finalización específica. El empleado es contratado de manera continua y no hay una duración predeterminada para la relación laboral.'],
            ['nombre_contrato' => 'Contrato de trabajo temporal:', 'descripcion' => 'Este tipo de contrato tiene una duración específica. El empleado es contratado para trabajar durante un período determinado, y al final de ese tiempo, el contrato puede renovarse o terminarse.'],
            ['nombre_contrato' => 'Contrato a tiempo completo', 'descripcion' => 'En este contrato, el empleado trabaja un número de horas que se considera a tiempo completo según las leyes laborales del país. Por lo general, implica una jornada laboral estándar.'],
            ['nombre_contrato' => 'Contrato a tiempo parcial', 'descripcion' => 'En este tipo de contrato, el empleado trabaja un número de horas menor que el estándar a tiempo completo. La carga de trabajo puede variar, pero generalmente es menos que un día completo.'],
            ['nombre_contrato' => 'Contrato por obra o servicio', 'descripcion' => 'Se utiliza cuando el empleado es contratado para realizar un trabajo específico o para un proyecto en particular. Una vez que se completa la tarea o el proyecto, el contrato puede finalizar.'],
            ['nombre_contrato' => 'Contrato temporal por circunstancias de producción', 'descripcion' => 'Similar a un contrato por obra o servicio, este contrato se utiliza cuando la empresa necesita cubrir temporalmente un aumento en la carga de trabajo debido a circunstancias específicas, como picos de producción.'],
            ['nombre_contrato' => 'Contrato para la formación y el aprendizaje', 'descripcion' => 'Destinado a la formación profesional de un empleado. Combina la formación teórica con la práctica laboral y generalmente tiene una duración específica.'],
            ['nombre_contrato' => 'Contrato de prácticas', 'descripcion' => 'Diseñado para proporcionar experiencia laboral a estudiantes o recién graduados. Por lo general, es de duración limitada y tiene como objetivo facilitar la transición de los individuos al mercado laboral.'],
            ['nombre_contrato' => 'Contrato por tiempo indefinido con período de prueba', 'descripcion' => 'Similar al contrato indefinido, pero incluye un período de prueba al principio, durante el cual ambas partes pueden evaluar la idoneidad de la relación laboral.'],
            ['nombre_contrato' => 'Contrato de servicios profesionales', 'descripcion' => 'Se utiliza para contratar a profesionales independientes o empresas para proporcionar servicios especializados. Puede tener una duración fija o indeterminada.']
        ];
    
        DB::table('tipo_contratos')->insert($tipo_contratos);
    }
    
}
