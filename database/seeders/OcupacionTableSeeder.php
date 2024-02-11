<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OcupacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ocupaciones = [
            ['nombre_ocupacion' => 'Doctor', 'descripcion_ocupacion' => 'Profesional de la salud que diagnostica, trata y previene enfermedades en pacientes.', 'id_cargo' => 'Medicina'],
            ['nombre_ocupacion' => 'Enfermero/a', 'descripcion_ocupacion' => 'Proporciona atención directa a los pacientes, administra medicamentos y apoya a los médicos en el cuidado de la salud.', 'id_cargo' => 'Profesional de la Salud'],
            ['nombre_ocupacion' => 'Ingeniero Civil', 'descripcion_ocupacion' => 'Diseña, supervisa y gestiona proyectos de construcción, como carreteras, puentes y edificios.', 'id_cargo' => 'Ingeniero'],
            ['nombre_ocupacion' => 'Profesor/a', 'descripcion_ocupacion' => 'Facilita el aprendizaje de los estudiantes en diversas materias y niveles educativos.', 'id_cargo' => 'Educación'],
            ['nombre_ocupacion' => 'Programador/a de Software', 'descripcion_ocupacion' => 'Crea, desarrolla y mantiene software y aplicaciones informáticas.', 'id_cargo' => 'Técnico en Tecnologías de la Información'],
            ['nombre_ocupacion' => 'Diseñador/a gráfico/a', 'descripcion_ocupacion' => 'Crea elementos visuales, como logotipos, gráficos y diseños, para comunicar mensajes específicos.', 'id_cargo' => 'Diseñador'],
            ['nombre_ocupacion' => 'Chef', 'descripcion_ocupacion' => 'Prepara y cocina alimentos en restaurantes u otros entornos de servicio de alimentos.', 'id_cargo' => 'Personal de Hostelería'],
            ['nombre_ocupacion' => 'Policía', 'descripcion_ocupacion' => 'Aplica y hace cumplir la ley, protege a la comunidad y responde a situaciones de emergencia.', 'id_cargo' => 'Oficial de Seguridad'],
            ['nombre_ocupacion' => 'Psicólogo/a', 'descripcion_ocupacion' => 'Estudia el comportamiento humano y proporciona asesoramiento y tratamiento para problemas emocionales y mentales.', 'id_cargo' => 'Investigador Social'],
            ['nombre_ocupacion' => 'Periodista', 'descripcion_ocupacion' => 'Investiga, escribe y presenta noticias y eventos actuales a través de diversos medios de comunicación.', 'id_cargo' => 'Profesional de Medios'],
            ['nombre_ocupacion' => 'Contador/a', 'descripcion_ocupacion' => 'Realiza tareas relacionadas con la contabilidad y las finanzas, como preparar informes financieros y gestionar registros.', 'id_cargo' => 'Analista Financiero'],
            ['nombre_ocupacion' => 'Arquitecto/a', 'descripcion_ocupacion' => 'Diseña y planifica edificios y estructuras, teniendo en cuenta aspectos estéticos, funcionales y técnicos.', 'id_cargo' => 'Arquitecto'],
            ['nombre_ocupacion' => 'Electricista', 'descripcion_ocupacion' => 'Instala, mantiene y repara sistemas eléctricos en edificios y otras estructuras.', 'id_cargo' => 'Electricista'],
            ['nombre_ocupacion' => 'Abogado/a', 'descripcion_ocupacion' => 'Brinda asesoramiento legal, representa a clientes en los tribunales y negocia acuerdos legales.', 'id_cargo' => 'Abogado'],
            ['nombre_ocupacion' => 'Farmacéutico/a', 'descripcion_ocupacion' => 'Dispensa medicamentos y ofrece consejos sobre su uso seguro y efectivo.', 'id_cargo' => 'Farmacéutico'],
            ['nombre_ocupacion' => 'Actor/Actriz', 'descripcion_ocupacion' => 'Interpreta personajes en producciones teatrales, cinematográficas o televisivas.', 'id_cargo' => 'Actor/Actriz'],
            ['nombre_ocupacion' => 'Agricultor/a', 'descripcion_ocupacion' => 'Cultiva y cosecha productos agrícolas, como granos, frutas y verduras.', 'id_cargo' => 'Agricultor'],
            ['nombre_ocupacion' => 'Astrónomo/a', 'descripcion_ocupacion' => 'Estudia el espacio, planetas, estrellas y otros fenómenos celestes.', 'id_cargo' => 'Astrónomo'],
            ['nombre_ocupacion' => 'Bombero/a', 'descripcion_ocupacion' => 'Responde a emergencias para extinguir incendios, realizar rescates y brindar asistencia médica.', 'id_cargo' => 'Bombero'],
            ['nombre_ocupacion' => 'Cajero/a', 'descripcion_ocupacion' => 'Trabaja en puntos de venta, procesa transacciones y brinda servicio al cliente.', 'id_cargo' => 'Cajero'],
            ['nombre_ocupacion' => 'Científico/a de Datos', 'descripcion_ocupacion' => 'Analiza e interpreta grandes conjuntos de datos para obtener ideas significativas.', 'id_cargo' => 'Científico de Datos'],
            ['nombre_ocupacion' => 'Dentista', 'descripcion_ocupacion' => 'Diagnostica y trata problemas dentales y bucales, realiza extracciones y ofrece cuidados preventivos.', 'id_cargo' => 'Dentista'],
            ['nombre_ocupacion' => 'Electricista Automotriz', 'descripcion_ocupacion' => 'Repara y mantiene sistemas eléctricos en vehículos, incluyendo automóviles y camiones.', 'id_cargo' => 'Electricista Automotriz'],
            ['nombre_ocupacion' => 'Economista', 'descripcion_ocupacion' => 'Estudia tendencias económicas, analiza datos y proporciona asesoramiento en políticas económicas.', 'id_cargo' => 'Economista'],
            ['nombre_ocupacion' => 'Fotógrafo/a', 'descripcion_ocupacion' => 'Captura imágenes visuales creativas y significativas utilizando cámaras y técnicas fotográficas.', 'id_cargo' => 'Fotógrafo'],
            ['nombre_ocupacion' => 'Geólogo/a', 'descripcion_ocupacion' => 'Estudia la estructura y composición de la Tierra, investiga recursos naturales y peligros geológicos.', 'id_cargo' => 'Geólogo'],
            ['nombre_ocupacion' => 'Gerente de Recursos Humanos', 'descripcion_ocupacion' => 'Supervisa funciones de recursos humanos, incluyendo reclutamiento, capacitación y gestión de personal.', 'id_cargo' => 'Gerente de Recursos Humanos'],
            ['nombre_ocupacion' => 'Ingeniero/a aeroespacial', 'descripcion_ocupacion' => 'Diseña y desarrolla aeronaves y sistemas espaciales.', 'id_cargo' => 'Ingeniero Aeroespacial'],
            ['nombre_ocupacion' => 'Juez/a', 'descripcion_ocupacion' => 'Administra justicia en tribunales, interpreta la ley y toma decisiones judiciales.', 'id_cargo' => 'Juez'],
            ['nombre_ocupacion' => 'Kinesiólogo/a', 'descripcion_ocupacion' => 'Trabaja en rehabilitación física y movimiento del cuerpo para mejorar la salud y el bienestar.', 'id_cargo' => 'Kinesiólogo'],
            ['nombre_ocupacion' => 'Lingüista', 'descripcion_ocupacion' => 'Estudia el lenguaje, su estructura, evolución y puede trabajar en traducción y lingüística computacional.', 'id_cargo' => 'Lingüista'],
            ['nombre_ocupacion' => 'Mecánico/a', 'descripcion_ocupacion' => 'Repara y mantiene maquinaria, vehículos y equipos mecánicos.', 'id_cargo' => 'Mecánico'],
            ['nombre_ocupacion' => 'Nutricionista', 'descripcion_ocupacion' => 'Ofrece asesoramiento nutricional y planifica dietas saludables para individuos o comunidades.', 'id_cargo' => 'Nutricionista'],
            ['nombre_ocupacion' => 'Oceanógrafo/a', 'descripcion_ocupacion' => 'Investiga los océanos, sus corrientes, vida marina y su impacto en el clima.', 'id_cargo' => 'Oceanógrafo'],
            ['nombre_ocupacion' => 'Piloto/a', 'descripcion_ocupacion' => 'Opera aeronaves, como aviones o helicópteros, para transportar pasajeros o carga.', 'id_cargo' => 'Piloto'],
            ['nombre_ocupacion' => 'Químico/a', 'descripcion_ocupacion' => 'Investiga las propiedades y composición de la materia, desarrolla nuevos productos químicos y procesos.', 'id_cargo' => 'Químico'],
            ['nombre_ocupacion' => 'Recepcionista de Hotel', 'descripcion_ocupacion' => 'Recibe a los huéspedes, gestiona reservas y proporciona información sobre los servicios del hotel.', 'id_cargo' => 'Recepcionista de Hotel'],
            ['nombre_ocupacion' => 'Sociólogo/a', 'descripcion_ocupacion' => 'Examina la sociedad humana, sus instituciones y patrones sociales.', 'id_cargo' => 'Sociólogo'],
            ['nombre_ocupacion' => 'Terapeuta Ocupacional', 'descripcion_ocupacion' => 'Ayuda a las personas a superar limitaciones físicas y emocionales para participar en actividades cotidianas.', 'id_cargo' => 'Terapeuta Ocupacional'],
            ['nombre_ocupacion' => 'Ultrasonografista', 'descripcion_ocupacion' => 'Realiza imágenes médicas utilizando ultrasonido para diagnosticar condiciones médicas.', 'id_cargo' => 'Ultrasonografista'],
            ['nombre_ocupacion' => 'Vendedora', 'descripcion_ocupacion' => 'Promociona y vende productos o servicios a clientes potenciales.', 'id_cargo' => 'Vendedora'],
            ['nombre_ocupacion' => 'Desarrollador/a Web', 'descripcion_ocupacion' => 'Diseña y desarrolla sitios web, aplicaciones y plataformas en línea.', 'id_cargo' => 'Desarrollador Web'],
            ['nombre_ocupacion' => 'Xilógrafo/a (Carpintero/a)', 'descripcion_ocupacion' => 'Trabaja con madera para construir y reparar estructuras y objetos.', 'id_cargo' => 'Carpintero'],
            ['nombre_ocupacion' => 'Instructor/a de yoga', 'descripcion_ocupacion' => 'Guía a los estudiantes en la práctica del yoga para mejorar la salud física y mental.', 'id_cargo' => 'Instructor de Yoga'],
            ['nombre_ocupacion' => 'Zoólogo/a', 'descripcion_ocupacion' => 'Estudia animales y sus hábitats, clasifica especies y contribuye a la conservación de la fauna.', 'id_cargo' => 'Zoólogo'],
        ];
    
        foreach ($ocupaciones as $data) {
            $cargo = Cargo::firstOrCreate(['nombre_cargo' => $data['id_cargo']], ['descripccion' => '']);
            $postId = $cargo->id;

            if ($postId !== null) {
                DB::table('ocupaciones')->insert([
                    'nombre_ocupacion' => $data['nombre_ocupacion'],
                    'descripcion_ocupacion' => $data['descripcion_ocupacion'],
                    'id_cargo' => $postId,
                ]);
            } else {
                throw new \Exception("No se encontró el ID del cargo para {$data['id_cargo']}");
            }
        }
    }
    
}