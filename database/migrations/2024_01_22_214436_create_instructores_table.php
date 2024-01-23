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
        Schema::create('instructores', function (Blueprint $table) {
            $table->id();
            $table->set('tipo_documento', ['TI', 'CC', 'NIT', 'PASAPORTE', 'CC_EXTRANJERO']);
            $table->string('numero_documento')->unique();
            $table->string('nombre_instructor', 30);
            $table->string('apellido_instructor', 30);
            $table->string('correo_electronico', 50);
            $table->string('contrasena');
            $table->foreignId('id_administrador')->constrained('administradores')->onDelete('cascade');
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
        Schema::dropIfExists('instructores');
    }
};
