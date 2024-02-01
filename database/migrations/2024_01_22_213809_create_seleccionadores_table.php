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
        Schema::create('seleccionadores', function (Blueprint $table) {
            $table->id();
            $table->string('numero_documento_seleccionador', 15);
            $table->set('tipo_documento_seleccionador', ['TI', 'CC', 'NIT', 'PASAPORTE', 'CC_EXTRANJERO']);
            $table->string('nombre_selector', 25);
            $table->string('correo_electronico_selector', 30);
            $table->string('telefono_selector', 15);
            $table->foreignId('id_tipo_usuario')->constrained('tipo_usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('seleccionadores');
    }
};
