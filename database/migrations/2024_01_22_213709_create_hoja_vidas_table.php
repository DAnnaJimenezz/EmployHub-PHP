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
        Schema::create('hoja_vidas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_personal', 200);
            $table->string('idiomas', 200);
            $table->string('experiencia', 500);
            $table->string('educacion', 500);
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
        Schema::dropIfExists('hoja_vidas');
    }
};
