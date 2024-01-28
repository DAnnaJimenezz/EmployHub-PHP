<?php

namespace Database\Seeders;

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
            ['nombre_ocupacion' => 'Doctor', 'descripcion_ocupacion' => 'Profesional de la salud que diagnostica, trata y previene enfermedades en pacientes.'],
            ['nombre_ocupacion' => 'Enfermero/a', 'descripcion_ocupacion' => 'Proporciona atención directa a los pacientes, administra medicamentos y apoya a los médicos en la atención médica.'],
            ['nombre_ocupacion' => 'Ingeniero civil', 'descripcion_ocupacion' => 'Diseña, supervisa y gestiona proyectos de construcción, como carreteras, puentes y edificios.'],
            ['nombre_ocupacion' => 'Profesor/a', 'descripcion_ocupacion' => 'Facilita el aprendizaje de los estudiantes en diversas materias y niveles educativos.'],
            ['nombre_ocupacion' => 'Programador/a de software', 'descripcion_ocupacion' => 'Crea, desarrolla y mantiene software y aplicaciones informáticas.'],
            ['nombre_ocupacion' => 'Diseñador/a gráfico/a', 'descripcion_ocupacion' => 'Crea elementos visuales, como logotipos, gráficos y diseños, para comunicar mensajes específicos.'],
            ['nombre_ocupacion' => 'Chef', 'descripcion_ocupacion' => 'Prepara y cocina alimentos en restaurantes u otros establecimientos de servicios de alimentación.'],
            ['nombre_ocupacion' => 'Policía', 'descripcion_ocupacion' => 'Aplica y hace cumplir la ley, protege a la comunidad y responde a situaciones de emergencia.'],
            ['nombre_ocupacion' => 'Psicólogo/a', 'descripcion_ocupacion' => 'Estudia el comportamiento humano y brinda asesoramiento y tratamiento para problemas emocionales y mentales.'],
            ['nombre_ocupacion' => 'Periodista', 'descripcion_ocupacion' => 'Investiga, escribe y presenta noticias y eventos actuales a través de diversos medios de comunicación.'],
            ['nombre_ocupacion' => 'Contador/a', 'descripcion_ocupacion' => 'Realiza tareas contables y financieras, como la preparación de informes financieros y la gestión de registros.'],
            ['nombre_ocupacion' => 'Arquitecto/a', 'descripcion_ocupacion' => 'Diseña y planifica edificios y estructuras, teniendo en cuenta aspectos estéticos, funcionales y técnicos.'],
            ['nombre_ocupacion' => 'Electricista', 'descripcion_ocupacion' => 'Instala, mantiene y repara sistemas eléctricos en edificios y otras estructuras.'],
            ['nombre_ocupacion' => 'Abogado/a', 'descripcion_ocupacion' => 'Brinda asesoramiento legal, representa a clientes en los tribunales y negocia acuerdos legales.'],
            ['nombre_ocupacion' => 'Farmacéutico/a', 'descripcion_ocupacion' => 'Dispensa medicamentos y ofrece asesoramiento sobre su uso seguro y efectivo.'],
            ['nombre_ocupacion' => 'Actor/Actriz', 'descripcion_ocupacion' => 'Interpreta personajes en producciones teatrales, cinematográficas o televisivas.'],
            ['nombre_ocupacion' => 'Agricultor/a', 'descripcion_ocupacion' => 'Cultiva y cosecha productos agrícolas, como granos, frutas y verduras.'],
            ['nombre_ocupacion' => 'Astrónomo/a', 'descripcion_ocupacion' => 'Estudia el espacio, los planetas, las estrellas y otros fenómenos celestes.'],
            ['nombre_ocupacion' => 'Bombero/a', 'descripcion_ocupacion' => 'Responde a emergencias para extinguir incendios, realizar rescates y brindar asistencia médica.'],
            ['nombre_ocupacion' => 'Cajero/a', 'descripcion_ocupacion' => 'Trabaja en puntos de venta, procesa transacciones y brinda servicio al cliente.'],
            ['nombre_ocupacion' => 'Científico/a de datos', 'descripcion_ocupacion' => 'Analiza e interpreta conjuntos de datos grandes para obtener conocimientos significativos.'],
            ['nombre_ocupacion' => 'Dentista', 'descripcion_ocupacion' => 'Diagnostica y trata problemas dentales y bucales, realiza extracciones y ofrece cuidados preventivos.'],
            ['nombre_ocupacion' => 'Electricista automotriz', 'descripcion_ocupacion' => 'Repara y mantiene sistemas eléctricos en vehículos, incluidos automóviles y camiones.'],
            ['nombre_ocupacion' => 'Economista', 'descripcion_ocupacion' => 'Estudia tendencias económicas, analiza datos y proporciona asesoramiento sobre políticas económicas.'],
            ['nombre_ocupacion' => 'Fotógrafo/a', 'descripcion_ocupacion' => 'Captura imágenes visuales creativas y significativas utilizando cámaras y técnicas fotográficas.'],
            ['nombre_ocupacion' => 'Geólogo/a', 'descripcion_ocupacion' => 'Estudia la estructura y composición de la Tierra, investiga los recursos naturales y los riesgos geológicos.'],
            ['nombre_ocupacion' => 'Gerente de recursos humanos', 'descripcion_ocupacion' => 'Supervisa funciones de recursos humanos, incluida la contratación, capacitación y gestión de personal.'],
            ['nombre_ocupacion' => 'Ingeniero/a aeroespacial', 'descripcion_ocupacion' => 'Diseña y desarrolla aeronaves y sistemas espaciales.'],
            ['nombre_ocupacion' => 'Juez/a', 'descripcion_ocupacion' => 'Administra justicia en los tribunales, interpreta la ley y toma decisiones judiciales.'],
            ['nombre_ocupacion' => 'Kinesiólogo/a', 'descripcion_ocupacion' => 'Trabaja en rehabilitación física y movimiento del cuerpo para mejorar la salud y el bienestar.'],
            ['nombre_ocupacion' => 'Lingüista', 'descripcion_ocupacion' => 'Estudia el lenguaje, su estructura y evolución, y puede trabajar en traducción y lingüística computacional.'],
            ['nombre_ocupacion' => 'Mecánico/a', 'descripcion_ocupacion' => 'Repara y mantiene maquinaria, vehículos y equipos mecánicos.'],
            ['nombre_ocupacion' => 'Nutricionista', 'descripcion_ocupacion' => 'Proporciona asesoramiento nutricional y planifica dietas saludables para individuos o comunidades.'],
            ['nombre_ocupacion' => 'Oceanógrafo/a', 'descripcion_ocupacion' => 'Investiga los océanos, sus corrientes, la vida marina y su impacto en el clima.'],
            ['nombre_ocupacion' => 'Piloto/a', 'descripcion_ocupacion' => 'Opera aeronaves, como aviones o helicópteros, para transportar pasajeros o carga.'],
            ['nombre_ocupacion' => 'Químico/a', 'descripcion_ocupacion' => 'Investiga las propiedades y composición de la materia, desarrolla nuevos productos químicos y realiza análisis químicos.'],
            ['nombre_ocupacion' => 'Recepcionista de hotel', 'descripcion_ocupacion' => 'Recibe a los huéspedes, gestiona reservas y proporciona información sobre los servicios del hotel.'],
            ['nombre_ocupacion' => 'Sociólogo/a', 'descripcion_ocupacion' => 'Examina la sociedad humana, sus instituciones y patrones sociales.'],
            ['nombre_ocupacion' => 'Terapeuta ocupacional', 'descripcion_ocupacion' => 'Ayuda a las personas a superar limitaciones físicas y emocionales para participar en actividades cotidianas.'],
            ['nombre_ocupacion' => 'Ultrasonografista', 'descripcion_ocupacion' => 'Realiza imágenes médicas utilizando ultrasonido para diagnosticar condiciones médicas.'],
            ['nombre_ocupacion' => 'Vendedora', 'descripcion_ocupacion' => 'Promueve y vende productos o servicios a clientes potenciales.'],
            ['nombre_ocupacion' => 'Desarrollador/a web', 'descripcion_ocupacion' => 'Diseña y desarrolla sitios web, aplicaciones y plataformas en línea.'],
            ['nombre_ocupacion' => 'Xilógrafo/a (Carpintero/a)', 'descripcion_ocupacion' => 'Trabaja con madera para construir y reparar estructuras y objetos.'],
            ['nombre_ocupacion' => 'Instructor/a de yoga', 'descripcion_ocupacion' => 'Guía a los estudiantes en la práctica del yoga para mejorar la salud física y mental.'],
            ['nombre_ocupacion' => 'Zoólogo/a', 'descripcion_ocupacion' => 'Estudia animales y sus hábitats, clasifica especies y contribuye a la conservación de la fauna.'],
        ];
    
        DB::table('ocupaciones')->insert($ocupaciones);
    }
    
}