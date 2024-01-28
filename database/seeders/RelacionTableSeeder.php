<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relaciones = [
            ['nombre_relacion_ocupacion' => 'Medicina', 'nombre_ocupacion' => 'Doctor'],
            ['nombre_relacion_ocupacion' => 'Atención al paciente', 'nombre_ocupacion' => 'Enfermero/a'],
            ['nombre_relacion_ocupacion' => 'Ingeniería civil', 'nombre_ocupacion' => 'Ingeniero civil'],
            ['nombre_relacion_ocupacion' => 'Enseñanza', 'nombre_ocupacion' => 'Profesor/a'],
            ['nombre_relacion_ocupacion' => 'Programación de software', 'nombre_ocupacion' => 'Programador/a de software'],
            ['nombre_relacion_ocupacion' => 'Diseño gráfico', 'nombre_ocupacion' => 'Diseñador/a gráfico/a'],
            ['nombre_relacion_ocupacion' => 'Cocina y gastronomía', 'nombre_ocupacion' => 'Chef'],
            ['nombre_relacion_ocupacion' => 'Aplicación de la ley', 'nombre_ocupacion' => 'Policía'],
            ['nombre_relacion_ocupacion' => 'Psicología', 'nombre_ocupacion' => 'Psicólogo/a'],
            ['nombre_relacion_ocupacion' => 'Periodismo', 'nombre_ocupacion' => 'Periodista'],
            ['nombre_relacion_ocupacion' => 'Contabilidad', 'nombre_ocupacion' => 'Contador/a'],
            ['nombre_relacion_ocupacion' => 'Arquitectura', 'nombre_ocupacion' => 'Arquitecto/a'],
            ['nombre_relacion_ocupacion' => 'Electricidad', 'nombre_ocupacion' => 'Electricista'],
            ['nombre_relacion_ocupacion' => 'Derecho', 'nombre_ocupacion' => 'Abogado/a'],
            ['nombre_relacion_ocupacion' => 'Farmacia', 'nombre_ocupacion' => 'Farmacéutico/a'],
            ['nombre_relacion_ocupacion' => 'Actuación', 'nombre_ocupacion' => 'Actor/Actriz'],
            ['nombre_relacion_ocupacion' => 'Agricultura', 'nombre_ocupacion' => 'Agricultor/a'],
            ['nombre_relacion_ocupacion' => 'Astronomía', 'nombre_ocupacion' => 'Astrónomo/a'],
            ['nombre_relacion_ocupacion' => 'Extinción de incendios', 'nombre_ocupacion' => 'Bombero/a'],
            ['nombre_relacion_ocupacion' => 'Atención al cliente', 'nombre_ocupacion' => 'Cajero/a'],
            ['nombre_relacion_ocupacion' => 'Ciencia de datos', 'nombre_ocupacion' => 'Científico/a de datos'],
            ['nombre_relacion_ocupacion' => 'Odontología', 'nombre_ocupacion' => 'Dentista'],
            ['nombre_relacion_ocupacion' => 'Mantenimiento de vehículos', 'nombre_ocupacion' => 'Electricista automotriz'],
            ['nombre_relacion_ocupacion' => 'Economía', 'nombre_ocupacion' => 'Economista'],
            ['nombre_relacion_ocupacion' => 'Fotografía', 'nombre_ocupacion' => 'Fotógrafo/a'],
            ['nombre_relacion_ocupacion' => 'Geología', 'nombre_ocupacion' => 'Geólogo/a'],
            ['nombre_relacion_ocupacion' => 'Gestión de recursos humanos', 'nombre_ocupacion' => 'Gerente de recursos humanos'],
            ['nombre_relacion_ocupacion' => 'Ingeniería aeroespacial', 'nombre_ocupacion' => 'Ingeniero/a aeroespacial'],
            ['nombre_relacion_ocupacion' => 'Administración de justicia', 'nombre_ocupacion' => 'Juez/a'],
            ['nombre_relacion_ocupacion' => 'Kinesiología', 'nombre_ocupacion' => 'Kinesiólogo/a'],
            ['nombre_relacion_ocupacion' => 'Lingüística', 'nombre_ocupacion' => 'Lingüista'],
            ['nombre_relacion_ocupacion' => 'Mecánica', 'nombre_ocupacion' => 'Mecánico/a'],
            ['nombre_relacion_ocupacion' => 'Nutrición', 'nombre_ocupacion' => 'Nutricionista'],
            ['nombre_relacion_ocupacion' => 'Oceanografía', 'nombre_ocupacion' => 'Oceanógrafo/a'],
            ['nombre_relacion_ocupacion' => 'Pilotaje', 'nombre_ocupacion' => 'Piloto/a'],
            ['nombre_relacion_ocupacion' => 'Química', 'nombre_ocupacion' => 'Químico/a'],
            ['nombre_relacion_ocupacion' => 'Atención al cliente', 'nombre_ocupacion' => 'Recepcionista de hotel'],
            ['nombre_relacion_ocupacion' => 'Sociología', 'nombre_ocupacion' => 'Sociólogo/a'],
            ['nombre_relacion_ocupacion' => 'Terapia ocupacional', 'nombre_ocupacion' => 'Terapeuta ocupacional'],
            ['nombre_relacion_ocupacion' => 'Ultrasonografía médica', 'nombre_ocupacion' => 'Ultrasonografista'],
            ['nombre_relacion_ocupacion' => 'Ventas', 'nombre_ocupacion' => 'Vendedora'],
            ['nombre_relacion_ocupacion' => 'Desarrollo web', 'nombre_ocupacion' => 'Desarrollador/a web'],
            ['nombre_relacion_ocupacion' => 'Carpintería', 'nombre_ocupacion' => 'Xilógrafo/a (Carpintero/a)'],
            ['nombre_relacion_ocupacion' => 'Enseñanza de yoga', 'nombre_ocupacion' => 'Instructor/a de yoga'],
            ['nombre_relacion_ocupacion' => 'Zoología', 'nombre_ocupacion' => 'Zoólogo/a'],
        ];

        foreach ($relaciones as $data) {
            $occupationId = DB::table('ocupaciones')->where('nombre_ocupacion', $data['nombre_ocupacion'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('relaciones')->insert([
                    'nombre_relacion_ocupacion' => $data['nombre_relacion_ocupacion'],
                    'id_ocupaciones' => $occupationId,
                    'nombre_ocupacion' => $data['nombre_ocupacion'],
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['nombre_ocupacion']}");
            }
        }
    }
}
