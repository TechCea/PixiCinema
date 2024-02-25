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
        Schema::create('series', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('Titulo_Serie');
            $table->integer('N_Temporada');
            $table->integer('N_Episodios');
            $table->string('Descripcion');
            $table->date('Ano_Lanzamiento');
            $table->string('Clasificacion');
            $table->string('Imagen');
            $table->string('URL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
};
