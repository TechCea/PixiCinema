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
        Schema::create('tipo_video', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('Nombre');
            $table->integer('Pelicula_id')->index('Pelicula_id');
            $table->integer('Serie_id')->index('Serie_id');
            $table->integer('Resena_id')->index('Resena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_video');
    }
};
