<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponderaciones', function (Blueprint $table) {
            $table->id();
            $table->set('idiomas', ['INGLÉS', 'FRANCÉS', 'ALEMÁN', 'ESPAÑOL']);
            $table->set('educacion', ['LICENCIATURA', 'POSTGRADO', 'GRADO', 'TÉCNICO', 'TECNÓLOGO', 'INGENIERO']);
            $table->string('experiencia_laboral');
            $table->string('habilidades_tecnicas');
            $table->string('proyecto_anterior', 60);
            $table->string('referencias', 40);
            $table->string('curso_adicional', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ponderaciones');
    }
};
