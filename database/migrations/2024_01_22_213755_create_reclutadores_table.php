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
        Schema::create('reclutadores', function (Blueprint $table) {
            $table->id();
            $table->string('numero_documento', 15);
            $table->set('tipo_documento', ['TI', 'CC', 'NIT', 'PASAPORTE', 'CC_EXTRANJERO']);
            $table->string('nombre', 25);
            $table->string('telefono', 15);
            $table->string('correo_electronico', 30);
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
        Schema::dropIfExists('reclutadores');
    }
};
