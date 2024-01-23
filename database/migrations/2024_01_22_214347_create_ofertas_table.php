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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_vacante', 50);
            $table->string('descripcion_vacante', 250);
            $table->string('nombre_empresa', 100);
            $table->string('direccion', 50);
            $table->decimal('salario', 10, 2);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('meses_experiencia');
            $table->string('requisitos', 500);
            $table->foreignId('id_tipos_contrato')->constrained('tipo_contratos')->onDelete('cascade');
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
        Schema::dropIfExists('ofertas');
    }
};
