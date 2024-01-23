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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa', 25);
            $table->string('representante_legal', 50);
            $table->enum('tipo_empresa', ['NO_DEFINIDO', 'LIMITADA', 'ANÓNIMA', 'ORDEN', 'SOCIEDAD_ASOCIATIVA', 'EMPRESARIO_INDIVIDUAL', 'OTRA', 'PERSONA_NATURAL', 'SOCIEDAD_COLECTIVA', 'SOCIEDAD_POR_ACCIONES_SIMPLIFICADA', 'SOCIEDAD_DE_RESPONSABILIDAD_LIMITADA', 'SOCIEDAD_EN_COMANDITA_SIMPLE', 'SOCIEDAD_EN_COMANDITA_POR_ACCIONES', 'EMPRESA_RURAL_SENA_EMPRENDE_RURAL']);
            $table->string('NIT', 50)->unique();
            $table->string('numero_trabajadores', 50);
            $table->string('correo_representante_legal', 80);
            $table->enum('naturaleza', ['PÚBLICA', 'PRIVADA', 'MIXTA']);
            $table->string('correo_empresa', 80);
            $table->string('telefono_empresa', 30);
            $table->string('telefono_alternativo_empresa', 30);
            $table->string('gerente_recursos_humanos', 50);
            $table->string('telefono_alternativo_gerente', 30);
            $table->string('telefono_alternativo_2_gerente', 30);
            $table->string('correo_gerente', 80);
            $table->foreignId('id_tipo_usuario')->constrained('tipo_usuarios')->onDelete('cascade');
            $table->foreignId('id_cargo')->constrained('cargos')->onDelete('cascade');
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
        Schema::dropIfExists('empresas');
    }
};
