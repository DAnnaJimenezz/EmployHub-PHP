<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DenominacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $denominaciones = [
            ['descripcion_denominacion' => 'Profesional de la salud que diagnostica, trata y previene enfermedades en pacientes', 'nombre_ocupacion' => 'Doctor'],
            ['descripcion_denominacion' => 'Proporciona atención directa a los pacientes, administra medicamentos y apoya a los médicos en el cuidado de la salud.', 'nombre_ocupacion' => 'Enfermero/a'],
            ['descripcion_denominacion' => 'Diseña, supervisa y gestiona proyectos de construcción, como carreteras, puentes y edificios.', 'nombre_ocupacion' => 'Ingeniero civil'],
            ['descripcion_denominacion' => 'Facilita el aprendizaje de los estudiantes en diversas materias y niveles educativos.', 'nombre_ocupacion' => 'Profesor/a'],
            ['descripcion_denominacion' => 'Crea, desarrolla y mantiene software y aplicaciones informáticas.', 'nombre_ocupacion' => 'Programador/a de software'],
            ['descripcion_denominacion' => 'Crea elementos visuales, como logotipos, gráficos y diseños, para comunicar mensajes específicos.', 'nombre_ocupacion' => 'Diseñador/a gráfico/a'],
            ['descripcion_denominacion' => 'Prepara y cocina alimentos en restaurantes u otros entornos de servicio de alimentos.', 'nombre_ocupacion' => 'Chef'],
            ['descripcion_denominacion' => 'Aplica y hace cumplir la ley, protege a la comunidad y responde a situaciones de emergencia.', 'nombre_ocupacion' => 'Policía'],
            ['descripcion_denominacion' => 'Estudia el comportamiento humano y ofrece consejo y tratamiento para problemas emocionales y mentales.', 'nombre_ocupacion' => 'Psicólogo/a'],
            ['descripcion_denominacion' => 'Investiga, escribe y presenta noticias y eventos actuales a través de varios medios de comunicación.', 'nombre_ocupacion' => 'Periodista'],
            ['descripcion_denominacion' => 'Realiza tareas relacionadas con la contabilidad y las finanzas, como preparar informes financieros y gestionar registros.', 'nombre_ocupacion' => 'Contador/a'],
            ['descripcion_denominacion' => 'Diseña y planifica edificios y estructuras, teniendo en cuenta aspectos estéticos, funcionales y técnicos.', 'nombre_ocupacion' => 'Arquitecto/a'],
            ['descripcion_denominacion' => 'Instala, mantiene y repara sistemas eléctricos en edificios y otras estructuras.', 'nombre_ocupacion' => 'Electricista'],
            ['descripcion_denominacion' => 'Ofrece asesoramiento legal, representa a clientes en los tribunales y negocia acuerdos legales.', 'nombre_ocupacion' => 'Abogado/a'],
            ['descripcion_denominacion' => 'Dispensa medicamentos y ofrece asesoramiento sobre su uso seguro y efectivo.', 'nombre_ocupacion' => 'Farmacéutico/a'],
            ['descripcion_denominacion' => 'Interpreta personajes en producciones teatrales, cinematográficas o televisivas.', 'nombre_ocupacion' => 'Actor/Actriz'],
            ['descripcion_denominacion' => 'Cultiva y cosecha productos agrícolas, como granos, frutas y verduras.', 'nombre_ocupacion' => 'Agricultor/a'],
            ['descripcion_denominacion' => 'Estudia el espacio, planetas, estrellas y otros fenómenos celestes.', 'nombre_ocupacion' => 'Astrónomo/a'],
            ['descripcion_denominacion' => 'Responde a emergencias para extinguir incendios, realizar rescates y brindar asistencia médica.', 'nombre_ocupacion' => 'Bombero/a'],
            ['descripcion_denominacion' => 'Trabaja en puntos de venta, procesa transacciones y brinda servicio al cliente.', 'nombre_ocupacion' => 'Cajero/a'],
            ['descripcion_denominacion' => 'Analiza e interpreta conjuntos de datos grandes para obtener información significativa.', 'nombre_ocupacion' => 'Científico/a de datos'],
            ['descripcion_denominacion' => 'Diagnostica y trata problemas dentales y bucales, realiza extracciones y ofrece cuidado preventivo.', 'nombre_ocupacion' => 'Dentista'],
            ['descripcion_denominacion' => 'Repara y mantiene sistemas eléctricos en vehículos, incluidos automóviles y camiones.', 'nombre_ocupacion' => 'Electricista automotriz'],
            ['descripcion_denominacion' => 'Estudia tendencias económicas, analiza datos y ofrece asesoramiento sobre políticas económicas.', 'nombre_ocupacion' => 'Economista'],
            ['descripcion_denominacion' => 'Captura imágenes visuales creativas y significativas utilizando cámaras y técnicas fotográficas.', 'nombre_ocupacion' => 'Fotógrafo/a'],
            ['descripcion_denominacion' => 'Estudia la estructura y composición de la Tierra, investiga los recursos naturales y los peligros geológicos.', 'nombre_ocupacion' => 'Geólogo/a'],
            ['descripcion_denominacion' => 'Supervisa funciones de recursos humanos, incluida la contratación, capacitación y gestión de personal.', 'nombre_ocupacion' => 'Gerente de recursos humanos'],
            ['descripcion_denominacion' => 'Diseña y desarrolla aeronaves y sistemas espaciales.', 'nombre_ocupacion' => 'Ingeniero/a aeroespacial'],
            ['descripcion_denominacion' => 'Administra justicia en los tribunales, interpreta la ley y toma decisiones judiciales.', 'nombre_ocupacion' => 'Juez/a'],
            ['descripcion_denominacion' => 'Trabaja en rehabilitación física y movimiento del cuerpo para mejorar la salud y el bienestar.', 'nombre_ocupacion' => 'Kinesiólogo/a'],
            ['descripcion_denominacion' => 'Estudia el lenguaje, su estructura y evolución, y puede trabajar en traducción y lingüística computacional.', 'nombre_ocupacion' => 'Lingüista'],
            ['descripcion_denominacion' => 'Repara y mantiene maquinaria, vehículos y equipos mecánicos.', 'nombre_ocupacion' => 'Mecánico/a'],
            ['descripcion_denominacion' => 'Ofrece asesoramiento nutricional y planea dietas saludables para individuos o comunidades.', 'nombre_ocupacion' => 'Nutricionista'],
            ['descripcion_denominacion' => 'Investiga los océanos, sus corrientes, la vida marina y su impacto en el clima.', 'nombre_ocupacion' => 'Oceanógrafo/a'],
            ['descripcion_denominacion' => 'Opera aeronaves, como aviones o helicópteros, para transportar pasajeros o carga.', 'nombre_ocupacion' => 'Piloto/a'],
            ['descripcion_denominacion' => 'Investiga las propiedades y composición de la materia, desarrolla nuevos productos químicos y procesos.', 'nombre_ocupacion' => 'Químico/a'],
            ['descripcion_denominacion' => 'Recibe a los huéspedes, gestiona reservas y brinda información sobre los servicios del hotel.', 'nombre_ocupacion' => 'Recepcionista de hotel'],
            ['descripcion_denominacion' => 'Examina la sociedad humana, sus instituciones y patrones sociales.', 'nombre_ocupacion' => 'Sociólogo/a'],
            ['descripcion_denominacion' => 'Ayuda a las personas a superar limitaciones físicas y emocionales para participar en actividades cotidianas.', 'nombre_ocupacion' => 'Terapeuta ocupacional'],
            ['descripcion_denominacion' => 'Realiza imágenes médicas utilizando ultrasonido para diagnosticar condiciones médicas.', 'nombre_ocupacion' => 'Ultrasonografista'],
            ['descripcion_denominacion' => 'Promueve y vende productos o servicios a clientes potenciales', 'nombre_ocupacion' => 'Vendedora'],
            ['descripcion_denominacion' => 'Diseña y desarrolla sitios web, aplicaciones y plataformas en línea.', 'nombre_ocupacion' => 'Desarrollador/a web'],
            ['descripcion_denominacion' => 'Trabaja con madera para construir y reparar estructuras y objetos.', 'nombre_ocupacion' => 'Xilógrafo/a (Carpintero/a)'],
            ['descripcion_denominacion' => 'Guía a los estudiantes en la práctica del yoga para mejorar la salud física y mental', 'nombre_ocupacion' => 'Instructor/a de yoga'],
            ['descripcion_denominacion' => 'Estudia animales y sus hábitats, clasifica especies y contribuye a la conservación de la fauna.', 'nombre_ocupacion' => 'Zoólogo/a'],
        ];

        foreach ($denominaciones as $data) {
            $occupationId = DB::table('ocupaciones')->where('nombre_ocupacion', $data['nombre_ocupacion'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('denominaciones')->insert([
                    'descripcion_denominacion' => $data['descripcion_denominacion'],
                    'id_ocupaciones' => $occupationId,
                    'nombre_ocupacion' => $data['nombre_ocupacion']
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['nombre_ocupacion']}");
            }
        }
    
    }
}