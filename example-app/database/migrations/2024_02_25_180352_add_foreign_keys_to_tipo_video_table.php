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
        Schema::table('tipo_video', function (Blueprint $table) {
            $table->foreign(['Pelicula_id'], 'Pelicula_id')->references(['id'])->on('peliculas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['Serie_id'], 'Serie_id')->references(['id'])->on('series')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['Resena_id'], 'Resena')->references(['id'])->on('resenas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo_video', function (Blueprint $table) {
            $table->dropForeign('Pelicula_id');
            $table->dropForeign('Serie_id');
            $table->dropForeign('Resena');
        });
    }
};
