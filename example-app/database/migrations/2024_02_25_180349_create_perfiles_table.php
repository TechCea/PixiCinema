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
        Schema::create('perfiles', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('TipoPerfil');
            $table->string('NombrePerfil');
            $table->integer('Usuario_id')->index('Usuario_id');
            $table->integer('id_Lista')->index('id_Lista');
            $table->integer('Resena_id')->index('Resena_id');
            $table->string('Imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
};
