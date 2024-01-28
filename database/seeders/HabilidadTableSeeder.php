<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habilidades = [
            ['nombre_habilidad' => 'Diagnóstico y Tratamiento Médico', 'descripcion_habilidad' => 'Capacidad para diagnosticar enfermedades, desarrollar planes de tratamiento y brindar atención médica a los pacientes.', 'nombre_ocupacion' => 'Doctor'],
            ['nombre_habilidad' => 'Cuidado del Paciente y Administración de Medicamentos', 'descripcion_habilidad' => 'Competencia en atención directa al paciente, administración de medicamentos y colaboración con el equipo médico.', 'nombre_ocupacion' => 'Enfermero/a'],
            ['nombre_habilidad' => 'Diseño y Gestión de Proyectos de Construcción', 'descripcion_habilidad' => 'Capacidad para diseñar y supervisar proyectos de construcción, asegurando la eficiencia y seguridad de las estructuras.', 'nombre_ocupacion' => 'Ingeniero civil'],
            ['nombre_habilidad' => 'Facilitación del Aprendizaje', 'descripcion_habilidad' => 'Capacidad para impartir conocimientos de manera efectiva, adaptándose a diferentes estilos de aprendizaje y niveles educativos.', 'nombre_ocupacion' => 'Profesor/a'],
            ['nombre_habilidad' => 'Desarrollo de Software y Codificación', 'descripcion_habilidad' => 'Competencia en la creación, desarrollo y mantenimiento de software y aplicaciones informáticas a través de la programación.', 'nombre_ocupacion' => 'Programador/a de software'],
            ['nombre_habilidad' => 'Diseño Visual y Comunicación Gráfica', 'descripcion_habilidad' => 'Habilidad para crear elementos visuales atractivos, como logotipos, gráficos y diseños, para transmitir mensajes específicos.', 'nombre_ocupacion' => 'Diseñador/a gráfico/a'],
            ['nombre_habilidad' => 'Preparación y Cocina de Alimentos', 'descripcion_habilidad' => 'Competencia en la preparación y presentación de alimentos, así como conocimiento de técnicas culinarias.', 'nombre_ocupacion' => 'Chef'],
            ['nombre_habilidad' => 'Aplicación de la Ley y Respuesta a Emergencias', 'descripcion_habilidad' => 'Capacidad para hacer cumplir la ley, proteger a la comunidad y responder eficazmente a situaciones de emergencia.', 'nombre_ocupacion' => 'Policía'],
            ['nombre_habilidad' => 'Evaluación Psicológica y Asesoramiento', 'descripcion_habilidad' => 'Competencia en la evaluación del comportamiento humano, brindando consejo y tratamiento para problemas emocionales y mentales.', 'nombre_ocupacion' => 'Psicólogo/a'],
            ['nombre_habilidad' => 'Investigación y Comunicación de Noticias', 'descripcion_habilidad' => 'Capacidad para investigar, escribir y presentar noticias y eventos actuales a través de varios medios de comunicación.', 'nombre_ocupacion' => 'Periodista'],
            ['nombre_habilidad' => 'Análisis y Finanzas', 'descripcion_habilidad' => 'Competencia en la realización de tareas contables, preparación de informes financieros y análisis de la situación financiera de una entidad.', 'nombre_ocupacion' => 'Contador/a'],
            ['nombre_habilidad' => 'Diseño Arquitectónico y Planificación', 'descripcion_habilidad' => 'Capacidad para diseñar edificios y estructuras, considerando aspectos estéticos, funcionales y técnicos.', 'nombre_ocupacion' => 'Arquitecto/a'],
            ['nombre_habilidad' => 'Instalación y Mantenimiento Eléctrico', 'descripcion_habilidad' => 'Competencia en la instalación, mantenimiento y reparación de sistemas eléctricos en edificios y otras estructuras.', 'nombre_ocupacion' => 'Electricista'],
            ['nombre_habilidad' => 'Asesoramiento Legal y Representación', 'descripcion_habilidad' => 'Capacidad para proporcionar asesoramiento legal, representar a clientes en tribunales y negociar acuerdos legales.', 'nombre_ocupacion' => 'Abogado/a'],
            ['nombre_habilidad' => 'Dispensación de Medicamentos y Asesoramiento', 'descripcion_habilidad' => 'Competencia en la dispensación de medicamentos y la provisión de asesoramiento sobre su uso seguro y efectivo.', 'nombre_ocupacion' => 'Farmacéutico/a'],
            ['nombre_habilidad' => 'Interpretación Actoral y Expresión Emocional', 'descripcion_habilidad' => 'Capacidad para interpretar personajes de manera convincente, transmitiendo emociones y mensajes a través de la actuación.', 'nombre_ocupacion' => 'Actor/Actriz'],
            ['nombre_habilidad' => 'Cultivo y Cosecha de Productos Agrícolas', 'descripcion_habilidad' => 'Competencia en el cultivo y la cosecha de productos agrícolas, manejo de tierras y cultivos.', 'nombre_ocupacion' => 'Agricultor/a'],
            ['nombre_habilidad' => 'Observación Astronómica y Análisis de Datos', 'descripcion_habilidad' => 'Capacidad para estudiar el espacio, realizar observaciones astronómicas y analizar datos celestes.', 'nombre_ocupacion' => 'Astrónomo/a'],
            ['nombre_habilidad' => 'Extinción de Incendios y Rescate', 'descripcion_habilidad' => 'Competencia en responder a emergencias para extinguir incendios, realizar rescates y brindar asistencia médica.', 'nombre_ocupacion' => 'Bombero/a'],
            ['nombre_habilidad' => 'Procesamiento de Transacciones y Servicio al Cliente', 'descripcion_habilidad' => 'Competencia en el procesamiento de transacciones financieras y la prestación de servicio al cliente en puntos de venta.', 'nombre_ocupacion' => 'Cajero/a'],
            ['nombre_habilidad' => 'Análisis de Datos y Programación', 'descripcion_habilidad' => 'Competencia en el análisis de grandes conjuntos de datos y el desarrollo de algoritmos utilizando habilidades de programación.', 'nombre_ocupacion' => 'Científico/a de datos'],
            ['nombre_habilidad' => 'Odontología y Procedimientos Dentales', 'descripcion_habilidad' => 'Competencia en el diagnóstico y tratamiento de problemas dentales y bucales, realizando procedimientos dentales.', 'nombre_ocupacion' => 'Dentista'],
            ['nombre_habilidad' => 'Reparación de Sistemas Eléctricos en Vehículos', 'descripcion_habilidad' => 'Competencia en reparar y mantener sistemas eléctricos en vehículos, incluidos automóviles y camiones.', 'nombre_ocupacion' => 'Electricista automotriz'],
            ['nombre_habilidad' => 'Análisis Económico y Asesoramiento', 'descripcion_habilidad' => 'Capacidad para estudiar tendencias económicas, analizar datos y proporcionar asesoramiento en políticas económicas.', 'nombre_ocupacion' => 'Economista'],
            ['nombre_habilidad' => 'Fotografía y Composición Visual', 'descripcion_habilidad' => 'Competencia en capturar imágenes visuales creativas y significativas utilizando cámaras y técnicas fotográficas.', 'nombre_ocupacion' => 'Fotógrafo/a'],
            ['nombre_habilidad' => 'Investigación Geológica y de Recursos Naturales', 'descripcion_habilidad' => 'Competencia en estudiar la estructura de la Tierra, investigar los recursos naturales y analizar los riesgos geológicos.', 'nombre_ocupacion' => 'Geólogo/a'],
            ['nombre_habilidad' => 'Gestión de Recursos Humanos y Relaciones Laborales', 'descripcion_habilidad' => 'Capacidad para supervisar funciones de recursos humanos, incluida la contratación, capacitación y gestión de personal.', 'nombre_ocupacion' => 'Gerente de recursos humanos'],
            ['nombre_habilidad' => 'Diseño y Desarrollo de Aeronaves', 'descripcion_habilidad' => 'Capacidad para diseñar y desarrollar aeronaves y sistemas espaciales.', 'nombre_ocupacion' => 'Ingeniero/a aeroespacial'],
            ['nombre_habilidad' => 'Administración de Justicia e Interpretación Legal', 'descripcion_habilidad' => 'Capacidad para administrar justicia en los tribunales, interpretar la ley y tomar decisiones judiciales.', 'nombre_ocupacion' => 'Juez/a'],
            ['nombre_habilidad' => 'Rehabilitación Física y Terapia Ocupacional', 'descripcion_habilidad' => 'Competencia en trabajar en rehabilitación física y mejorar el movimiento corporal a través de terapias.', 'nombre_ocupacion' => 'Kinesiólogo/a'],
            ['nombre_habilidad' => 'Estudio del Lenguaje y Traducción', 'descripcion_habilidad' => 'Competencia en estudiar el lenguaje, sus estructuras y evolución, y trabajar en traducción y análisis lingüístico.', 'nombre_ocupacion' => 'Lingüista'],
            ['nombre_habilidad' => 'Reparación y Mantenimiento Mecánico', 'descripcion_habilidad' => 'Competencia en reparar y mantener maquinaria, vehículos y equipos mecánicos.', 'nombre_ocupacion' => 'Mecánico/a'],
            ['nombre_habilidad' => 'Asesoramiento Nutricional y Planificación de Dietas', 'descripcion_habilidad' => 'Competencia en proporcionar asesoramiento nutricional y planificar dietas saludables.', 'nombre_ocupacion' => 'Nutricionista'],
            ['nombre_habilidad' => 'Investigación y Conservación Oceánica', 'descripcion_habilidad' => 'Competencia en investigar los océanos, sus corrientes y vida marina, y contribuir a la conservación de los ecosistemas marinos.', 'nombre_ocupacion' => 'Oceanógrafo/a'],
            ['nombre_habilidad' => 'Operación y Navegación de Aeronaves', 'descripcion_habilidad' => 'Capacidad para operar aeronaves, asegurando vuelos seguros y eficientes.', 'nombre_ocupacion' => 'Piloto/a'],
            ['nombre_habilidad' => 'Investigación Química y Desarrollo de Productos', 'descripcion_habilidad' => 'Competencia en investigar la composición de la materia, desarrollar productos químicos y realizar análisis químicos.', 'nombre_ocupacion' => 'Químico/a'],
            ['nombre_habilidad' => 'Servicio al Cliente y Gestión de Reservas', 'descripcion_habilidad' => 'Competencia en dar la bienvenida a los huéspedes, gestionar reservas y brindar información sobre los servicios del hotel.', 'nombre_ocupacion' => 'Recepcionista de hotel'],
            ['nombre_habilidad' => 'Análisis y Investigación Social', 'descripcion_habilidad' => 'Competencia en examinar la sociedad humana, investigar instituciones y patrones sociales.', 'nombre_ocupacion' => 'Sociólogo/a'],
            ['nombre_habilidad' => 'Terapia Ocupacional y Rehabilitación', 'descripcion_habilidad' => 'Competencia en ayudar a las personas a superar limitaciones físicas y emocionales para participar en actividades cotidianas.', 'nombre_ocupacion' => 'Terapeuta ocupacional'],
            ['nombre_habilidad' => 'Imagen Médica con Ultrasonido', 'descripcion_habilidad' => 'Competencia en realizar imágenes médicas utilizando ultrasonido para diagnosticar condiciones médicas.', 'nombre_ocupacion' => 'Ultrasonografista'],
            ['nombre_habilidad' => 'Ventas y Relaciones con Clientes', 'descripcion_habilidad' => 'Competencia en promover y vender productos o servicios, gestionar relaciones con los clientes.', 'nombre_ocupacion' => 'Vendedora'],
            ['nombre_habilidad' => 'Desarrollo Web y Programación', 'descripcion_habilidad' => 'Competencia en diseñar y desarrollar sitios web, aplicaciones y plataformas en línea de forma programática.', 'nombre_ocupacion' => 'Desarrollador/a web'],
            ['nombre_habilidad' => 'Trabajo en Madera y Construcción', 'descripcion_habilidad' => 'Competencia en trabajar con madera para construir y reparar estructuras y objetos.', 'nombre_ocupacion' => 'Xilógrafo/a (Carpintero/a)'],
            ['nombre_habilidad' => 'Enseñanza de Yoga y Bienestar Físico y Mental', 'descripcion_habilidad' => 'Competencia en guiar a los estudiantes en la práctica del yoga para mejorar la salud física y mental.', 'nombre_ocupacion' => 'Instructor/a de yoga'],
            ['nombre_habilidad' => 'Estudio y Conservación de Animales', 'descripcion_habilidad' => 'Competencia en estudiar animales, clasificar especies y contribuir a la conservación de la fauna.', 'nombre_ocupacion' => 'Zoólogo/a'],
        ];
    
        foreach ($habilidades as $data) {
            $occupationId = DB::table('ocupaciones')->where('nombre_ocupacion', $data['nombre_ocupacion'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('habilidades')->insert([
                    'nombre_habilidad' => $data['nombre_habilidad'],
                    'descripcion_habilidad' => $data['descripcion_habilidad'],
                    'id_ocupaciones' => $occupationId,
                    'nombre_ocupacion' => $data['nombre_ocupacion'],
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['nombre_ocupacion']}");
            }
        }
    }
}