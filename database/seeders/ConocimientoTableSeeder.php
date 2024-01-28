<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConocimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conocimientos = [
            ['nombre_conocimiento' => 'Medicina', 'descripcion_conocimiento' => 'Conocimiento de diagnosticar, tratar y prevenir enfermedades en pacientes, así como brindar atención médica integral.', 'nombre_ocupacion' => 'Doctor'],
            ['nombre_conocimiento' => 'Enfermería', 'descripcion_conocimiento' => 'Conocimiento de brindar atención directa a los pacientes, administrar medicamentos y apoyar a los médicos en la prestación de atención médica.', 'nombre_ocupacion' => 'Enfermero/a'],
            ['nombre_conocimiento' => 'Ingeniería Civil', 'descripcion_conocimiento' => 'Conocimiento de diseñar, supervisar y gestionar proyectos de construcción como carreteras, puentes y edificios.', 'nombre_ocupacion' => 'Ingeniero civil'],
            ['nombre_conocimiento' => 'Educación', 'descripcion_conocimiento' => 'Conocimiento de facilitar el aprendizaje de los estudiantes en diversas materias y niveles educativos.', 'nombre_ocupacion' => 'Profesor/a'],
            ['nombre_conocimiento' => 'Desarrollo de Software', 'descripcion_conocimiento' => 'Conocimiento de crear, desarrollar y mantener software y aplicaciones informáticas.', 'nombre_ocupacion' => 'Programador/a de software'],
            ['nombre_conocimiento' => 'Diseño Gráfico', 'descripcion_conocimiento' => 'Conocimiento de crear elementos visuales como logotipos, gráficos y diseños para transmitir mensajes específicos', 'nombre_ocupacion' => 'Diseñador/a gráfico/a'],
            ['nombre_conocimiento' => 'Artes Culinarias', 'descripcion_conocimiento' => 'Conocimiento de preparar y cocinar alimentos en restaurantes u otros entornos de servicio de alimentos.', 'nombre_ocupacion' => 'Chef'],
            ['nombre_conocimiento' => 'Aplicación de la Ley', 'descripcion_conocimiento' => 'Conocimiento de hacer cumplir la ley, proteger a la comunidad y responder a situaciones de emergencia.', 'nombre_ocupacion' => 'Policía'],
            ['nombre_conocimiento' => 'Psicología', 'descripcion_conocimiento' => 'Conocimiento de estudiar el comportamiento humano y proporcionar asesoramiento y tratamiento para problemas emocionales y mentales.', 'nombre_ocupacion' => 'Psicólogo/a'],
            ['nombre_conocimiento' => 'Periodismo', 'descripcion_conocimiento' => 'Conocimiento de investigar, escribir y presentar noticias y eventos actuales a través de diversos medios de comunicación.', 'nombre_ocupacion' => 'Periodista'],
            ['nombre_conocimiento' => 'Contabilidad', 'descripcion_conocimiento' => 'Conocimiento de tareas relacionadas con la contabilidad y las finanzas, incluida la preparación de informes financieros y la gestión de registros.', 'nombre_ocupacion' => 'Contador/a'],
            ['nombre_conocimiento' => 'Arquitectura', 'descripcion_conocimiento' => 'Conocimiento de diseñar y planificar edificios y estructuras, teniendo en cuenta aspectos estéticos, funcionales y técnicos.', 'nombre_ocupacion' => 'Arquitecto/a'],
            ['nombre_conocimiento' => 'Sistemas Eléctricos', 'descripcion_conocimiento' => 'Conocimiento de instalar, mantener y reparar sistemas eléctricos en edificios y otras estructuras.', 'nombre_ocupacion' => 'Electricista'],
            ['nombre_conocimiento' => 'Práctica Legal', 'descripcion_conocimiento' => 'Conocimiento de proporcionar asesoramiento legal, representar a clientes en los tribunales y negociar acuerdos legales.', 'nombre_ocupacion' => 'Abogado/a'],
            ['nombre_conocimiento' => 'Farmacia', 'descripcion_conocimiento' => 'Conocimiento de dispensar medicamentos y proporcionar consejos sobre su uso seguro y eficaz.', 'nombre_ocupacion' => 'Farmacéutico/a'],
            ['nombre_conocimiento' => 'Actuación', 'descripcion_conocimiento' => 'Conocimiento de interpretar personajes en producciones teatrales, cinematográficas o televisivas, transmitiendo emociones y mensajes a través de la actuación.', 'nombre_ocupacion' => 'Actor/Actriz'],
            ['nombre_conocimiento' => 'Agricultura', 'descripcion_conocimiento' => 'Conocimiento de cultivar y cosechar productos agrícolas, como cultivos, frutas y verduras, y gestionar actividades agrícolas.', 'nombre_ocupacion' => 'Agricultor/a'],
            ['nombre_conocimiento' => 'Astronomía', 'descripcion_conocimiento' => 'Conocimiento del espacio, planetas, estrellas y otros fenómenos celestes mediante la observación y análisis de datos astronómicos.', 'nombre_ocupacion' => 'Astrónomo/a'],
            ['nombre_conocimiento' => 'Lucha contra Incendios', 'descripcion_conocimiento' => 'Conocimiento de responder a emergencias, extinguir incendios, realizar rescates y proporcionar asistencia médica de emergencia.', 'nombre_ocupacion' => 'Bombero/a'],
            ['nombre_conocimiento' => 'Transacciones Minoristas', 'descripcion_conocimiento' => 'Conocimiento de trabajar en entornos minoristas, procesar transacciones financieras, manejar efectivo y proporcionar servicio al cliente.', 'nombre_ocupacion' => 'Cajero/a'],
            ['nombre_conocimiento' => 'Ciencia de Datos', 'descripcion_conocimiento' => 'Conocimiento de analizar grandes conjuntos de datos utilizando técnicas estadísticas y herramientas de programación para extraer información valiosa y tomar decisiones informadas.', 'nombre_ocupacion' => 'Científico/a de datos'],
            ['nombre_conocimiento' => 'Odontología', 'descripcion_conocimiento' => 'Conocimiento de diagnosticar y tratar problemas dentales y bucales, realizar procedimientos dentales y promover la salud bucal.', 'nombre_ocupacion' => 'Dentista'],
            ['nombre_conocimiento' => 'Sistemas Eléctricos Automotrices', 'descripcion_conocimiento' => 'Conocimiento de reparar y mantener sistemas eléctricos en vehículos, incluidos automóviles y camiones.', 'nombre_ocupacion' => 'Electricista Automotriz'],
            ['nombre_conocimiento' => 'Economía', 'descripcion_conocimiento' => 'Conocimiento de estudiar tendencias económicas, analizar datos y proporcionar asesoramiento sobre políticas económicas.', 'nombre_ocupacion' => 'Economista'],
            ['nombre_conocimiento' => 'Fotografía', 'descripcion_conocimiento' => 'Conocimiento de capturar imágenes visuales creativas y significativas utilizando cámaras y técnicas fotográficas.', 'nombre_ocupacion' => 'Fotógrafo/a'],
            ['nombre_conocimiento' => 'Geología', 'descripcion_conocimiento' => 'Conocimiento de estudiar la estructura y composición de la Tierra, investigar los recursos naturales y analizar los riesgos geológicos.', 'nombre_ocupacion' => 'Geólogo/a'],
            ['nombre_conocimiento' => 'Gestión de Recursos Humanos', 'descripcion_conocimiento' => 'Conocimiento de supervisar las funciones de recursos humanos, incluida la contratación, capacitación y gestión de personal.', 'nombre_ocupacion' => 'Gerente de recursos humanos'],
            ['nombre_conocimiento' => 'Ingeniería Aeroespacial', 'descripcion_conocimiento' => 'Conocimiento de diseñar y desarrollar aeronaves y sistemas aeroespaciales.', 'nombre_ocupacion' => 'Ingeniero/a aeroespacial'],
            ['nombre_conocimiento' => 'Administración Judicial', 'descripcion_conocimiento' => 'Conocimiento de administrar la justicia en los tribunales, interpretar la ley y tomar decisiones judiciales.', 'nombre_ocupacion' => 'Juez/a'],
            ['nombre_conocimiento' => 'Kinesiología', 'descripcion_conocimiento' => 'Conocimiento de trabajar en rehabilitación física, utilizando ejercicios terapéuticos', 'nombre_ocupacion' => 'Kinesiólogo/a'],
            ['nombre_conocimiento' => 'Lingüística', 'descripcion_conocimiento' => 'Conocimiento de estudiar el lenguaje, investigar su estructura, evolución y variaciones, y posiblemente trabajar en traducción o lingüística computacional.', 'nombre_ocupacion' => 'Lingüista'],
            ['nombre_conocimiento' => 'Mecánica', 'descripcion_conocimiento' => 'Conocimiento de reparar y mantener maquinaria, vehículos y equipos mecánicos, diagnosticar y resolver problemas mecánicos.', 'nombre_ocupacion' => 'Mecánico/a'],
            ['nombre_conocimiento' => 'Nutrición', 'descripcion_conocimiento' => 'Conocimiento de proporcionar asesoramiento nutricional, planificar dietas saludables y trabajar con individuos o comunidades para mejorar la salud a través de la dieta.', 'nombre_ocupacion' => 'Nutricionista'],
            ['nombre_conocimiento' => 'Oceanografía', 'descripcion_conocimiento' => 'Conocimiento de investigar océanos, sus corrientes, vida marina e impacto en el clima, contribuyendo a la comprensión y conservación de los ecosistemas marinos.', 'nombre_ocupacion' => 'Oceanógrafo/a'],
            ['nombre_conocimiento' => 'Aviación', 'descripcion_conocimiento' => 'Conocimiento de operar aeronaves, garantizando vuelos seguros y eficientes para transportar pasajeros o carga.', 'nombre_ocupacion' => 'Piloto/a'],
            ['nombre_conocimiento' => 'Química', 'descripcion_conocimiento' => 'Conocimiento de investigar las propiedades y composición de la materia, desarrollar nuevos productos y procesos químicos y realizar análisis químicos.', 'nombre_ocupacion' => 'Químico/a'],
            ['nombre_conocimiento' => 'Gestión Hotelera', 'descripcion_conocimiento' => 'Conocimiento de dar la bienvenida a los huéspedes, gestionar reservas y proporcionar información sobre los servicios del hotel.', 'nombre_ocupacion' => 'Recepcionista de hotel'],
            ['nombre_conocimiento' => 'Sociología', 'descripcion_conocimiento' => 'Conocimiento de examinar la sociedad humana, sus instituciones y patrones sociales para comprender y analizar el comportamiento humano en grupos.', 'nombre_ocupacion' => 'Sociólogo/a'],
            ['nombre_conocimiento' => 'Terapia Ocupacional', 'descripcion_conocimiento' => 'Conocimiento de ayudar a las personas a superar limitaciones físicas y emocionales para participar en actividades diarias a través de terapias específicas.', 'nombre_ocupacion' => 'Terapeuta ocupacional'],
            ['nombre_conocimiento' => 'Ultrasonografía Médica', 'descripcion_conocimiento' => 'Conocimiento de la realización de imágenes médicas utilizando ultrasonido para diagnosticar y monitorear condiciones médicas, especialmente en el campo de las imágenes médicas.', 'nombre_ocupacion' => 'Ultrasonografista'],
            ['nombre_conocimiento' => 'Técnicas de Venta', 'descripcion_conocimiento' => 'Conocimiento de la promoción y venta de productos o servicios, la gestión de relaciones con los clientes y el logro de objetivos de ventas.', 'nombre_ocupacion' => 'Vendedora'],
            ['nombre_conocimiento' => 'Desarrollo web', 'descripcion_conocimiento' => 'Conocimientos en diseño y desarrollo de sitios web, aplicaciones y plataformas online utilizando lenguajes de programación y herramientas específicas.', 'nombre_ocupacion' => 'Desarrollador/a web'],
            ['nombre_conocimiento' => 'Carpintería', 'descripcion_conocimiento' => 'Conocimiento del trabajo con madera para construir y reparar estructuras y objetos, utilizando habilidades de carpintería y herramientas especializadas.', 'nombre_ocupacion' => 'Xilógrafo/a (Carpintero/a)'],
            ['nombre_conocimiento' => 'Instrucción de yoga', 'descripcion_conocimiento' => 'Conocimientos para guiar a los estudiantes en la práctica del yoga, enseñar posturas, técnicas de respiración y promover la salud física y mental.', 'nombre_ocupacion' => 'Instructor/a de yoga'],
            ['nombre_conocimiento' => 'Zoología', 'descripcion_conocimiento' => 'Conocimientos para estudiar los animales y sus hábitats, clasificar especies y contribuir a la conservación del fauno.', 'nombre_ocupacion' => 'Zoólogo/a'],
        ];

        foreach ($conocimientos as $data) {
            $occupationId = DB::table('ocupaciones')->where('nombre_ocupacion', $data['nombre_ocupacion'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('conocimientos')->insert([
                    'nombre_conocimiento' => $data['nombre_conocimiento'],
                    'descripcion_conocimiento' => $data['descripcion_conocimiento'],
                    'id_ocupaciones' => $occupationId,
                    'nombre_ocupacion' => $data['nombre_ocupacion'],
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['nombre_ocupacion']}");
            }
        }
    }
}