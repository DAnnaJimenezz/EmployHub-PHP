<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cargos = [
            ['nombre_cargo' => 'Medicina', 'descripcion' => 'Profesiones relacionadas con la salud y la medicina.'],
            ['nombre_cargo' => 'Profesional de la Salud', 'descripcion' => 'Individuo calificado para diagnosticar, tratar y prevenir enfermedades y lesiones en pacientes.'],
            ['nombre_cargo' => 'Ingeniero', 'descripcion' => 'Profesional especializado en diseñar, construir y mantener estructuras y sistemas.'],
            ['nombre_cargo' => 'Educación', 'descripcion' => 'Profesiones relacionadas con la enseñanza y la educación.'],
            ['nombre_cargo' => 'Técnico en Tecnologías de la Información', 'descripcion' => 'Individuo con habilidades técnicas en sistemas informáticos y tecnologías digitales.'],
            ['nombre_cargo' => 'Diseñador', 'descripcion' => 'Profesional creativo especializado en crear conceptos visuales y soluciones de diseño.'],
            ['nombre_cargo' => 'Personal de Hostelería', 'descripcion' => 'Individuo responsable de brindar servicios en la industria hotelera y de restaurantes.'],
            ['nombre_cargo' => 'Oficial de Seguridad', 'descripcion' => 'Persona encargada de proteger y mantener la seguridad de individuos y propiedades.'],
            ['nombre_cargo' => 'Investigador Social', 'descripcion' => 'Profesional dedicado al estudio y análisis de la sociedad y el comportamiento humano.'],
            ['nombre_cargo' => 'Profesional de Medios', 'descripcion' => 'Individuo involucrado en la producción y distribución de contenido y comunicaciones multimedia.'],
            ['nombre_cargo' => 'Analista Financiero', 'descripcion' => 'Profesional especializado en el análisis y gestión de información financiera y económica.'],
            ['nombre_cargo' => 'Arquitecto', 'descripcion' => 'Diseña y planifica edificios y estructuras, teniendo en cuenta aspectos estéticos, funcionales y técnicos.'],
            ['nombre_cargo' => 'Electricista', 'descripcion' => 'Instala, mantiene y repara sistemas eléctricos en edificios y otras estructuras.'],
            ['nombre_cargo' => 'Abogado', 'descripcion' => 'Brinda asesoramiento legal, representa a clientes en tribunales y negocia acuerdos legales.'],
            ['nombre_cargo' => 'Farmacéutico', 'descripcion' => 'Dispensa medicamentos y ofrece consejos sobre su uso seguro y efectivo.'],
            ['nombre_cargo' => 'Actor/Actriz', 'descripcion' => 'Interpreta personajes en producciones teatrales, cinematográficas o televisivas.'],
            ['nombre_cargo' => 'Agricultor', 'descripcion' => 'Cultiva y cosecha productos agrícolas como granos, frutas y verduras.'],
            ['nombre_cargo' => 'Astrónomo', 'descripcion' => 'Estudia el espacio, planetas, estrellas y otros fenómenos celestes.'],
            ['nombre_cargo' => 'Bombero', 'descripcion' => 'Responde a emergencias para extinguir incendios, realizar rescates y brindar asistencia médica.'],
            ['nombre_cargo' => 'Cajero', 'descripcion' => 'Trabaja en puntos de venta, procesa transacciones y brinda servicio al cliente.'],
            ['nombre_cargo' => 'Científico de Datos', 'descripcion' => 'Analiza e interpreta grandes conjuntos de datos para obtener ideas significativas.'],
            ['nombre_cargo' => 'Dentista', 'descripcion' => 'Diagnostica y trata problemas dentales y bucales, realiza extracciones y ofrece cuidados preventivos.'],
            ['nombre_cargo' => 'Electricista Automotriz', 'descripcion' => 'Repara y mantiene sistemas eléctricos en vehículos, incluyendo automóviles y camiones.'],
            ['nombre_cargo' => 'Economista', 'descripcion' => 'Estudia tendencias económicas, analiza datos y brinda asesoramiento en políticas económicas.'],
            ['nombre_cargo' => 'Fotógrafo', 'descripcion' => 'Captura imágenes visuales creativas y significativas utilizando cámaras y técnicas fotográficas.'],
            ['nombre_cargo' => 'Geólogo', 'descripcion' => 'Estudia la estructura y composición de la Tierra, investiga recursos naturales y peligros geológicos.'],
            ['nombre_cargo' => 'Gerente de Recursos Humanos', 'descripcion' => 'Supervisa funciones de recursos humanos, incluyendo reclutamiento, capacitación y gestión de personal.'],
            ['nombre_cargo' => 'Ingeniero Aeroespacial', 'descripcion' => 'Diseña y desarrolla aeronaves y sistemas espaciales.'],
            ['nombre_cargo' => 'Juez', 'descripcion' => 'Administra justicia en tribunales, interpreta la ley y toma decisiones judiciales.'],
            ['nombre_cargo' => 'Kinesiólogo', 'descripcion' => 'Trabaja en rehabilitación física y movimiento del cuerpo para mejorar la salud y el bienestar.'],
            ['nombre_cargo' => 'Lingüista', 'descripcion' => 'Estudia el lenguaje, su estructura, evolución y trabaja en traducción y lingüística computacional.'],
            ['nombre_cargo' => 'Mecánico', 'descripcion' => 'Repara y mantiene maquinaria, vehículos y equipos mecánicos.'],
            ['nombre_cargo' => 'Nutricionista', 'descripcion' => 'Ofrece asesoramiento nutricional y planea dietas saludables para individuos o comunidades.'],
            ['nombre_cargo' => 'Oceanógrafo', 'descripcion' => 'Investiga los océanos, sus corrientes, vida marina y su impacto en el clima.'],
            ['nombre_cargo' => 'Piloto', 'descripcion' => 'Opera aeronaves, como aviones o helicópteros, para transportar pasajeros o carga.'],
            ['nombre_cargo' => 'Químico', 'descripcion' => 'Investiga las propiedades y composición de la materia, desarrolla nuevos productos químicos y procesos.'],
            ['nombre_cargo' => 'Recepcionista de Hotel', 'descripcion' => 'Recibe a los huéspedes, gestiona reservas y proporciona información sobre los servicios del hotel.'],
            ['nombre_cargo' => 'Sociólogo', 'descripcion' => 'Examina la sociedad humana, sus instituciones y patrones sociales.'],
            ['nombre_cargo' => 'Terapeuta Ocupacional', 'descripcion' => 'Ayuda a las personas a superar limitaciones físicas y emocionales para participar en actividades cotidianas.'],
            ['nombre_cargo' => 'Ultrasonografista', 'descripcion' => 'Realiza imágenes médicas utilizando ultrasonido para diagnosticar condiciones médicas.'],
            ['nombre_cargo' => 'Vendedora', 'descripcion' => 'Promociona y vende productos o servicios a clientes potenciales.'],
            ['nombre_cargo' => 'Desarrollador Web', 'descripcion' => 'Diseña y desarrolla sitios web, aplicaciones y plataformas en línea.'],
            ['nombre_cargo' => 'Carpintero', 'descripcion' => 'Trabaja con madera para construir y reparar estructuras y objetos.'],
            ['nombre_cargo' => 'Instructor de Yoga', 'descripcion' => 'Guía a los estudiantes en la práctica del yoga para mejorar la salud física y mental.'],
            ['nombre_cargo' => 'Zoólogo', 'descripcion' => 'Estudia animales y sus hábitats, clasifica especies y contribuye a la conservación de la fauna.'],
        ];
        

        DB::table('cargos')->insert($cargos);

    }
}