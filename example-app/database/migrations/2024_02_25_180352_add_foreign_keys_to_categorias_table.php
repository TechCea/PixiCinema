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
        Schema::table('categorias', function (Blueprint $table) {
            $table->foreign(['Pelicula_id'], 'Pelicula')->references(['id'])->on('peliculas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['Serie_id'], 'Series')->references(['id'])->on('series')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categorias', function (Blueprint $table) {
            $table->dropForeign('Pelicula');
            $table->dropForeign('Series');
        });
    }
};
