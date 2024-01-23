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
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_aplicantes_vacante');
            $table->foreignId('id_ofertas')->constrained('ofertas')->onDelete('cascade');
            $table->foreignId('id_localidades')->constrained('localidades')->onDelete('cascade');
            $table->foreignId('id_tipos_contrato')->constrained('tipo_contratos')->onDelete('cascade');
            $table->foreignId('id_ponderacion')->constrained('ponderaciones')->onDelete('cascade');    
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
        Schema::dropIfExists('vacantes');
    }
};
