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
        Schema::table('perfiles', function (Blueprint $table) {
            $table->foreign(['Resena_id'], 'Resena_id')->references(['id'])->on('resenas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_Lista'], 'id_Lista')->references(['id'])->on('lista_rep')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['Usuario_id'], 'Usuario_id')->references(['id'])->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perfiles', function (Blueprint $table) {
            $table->dropForeign('Resena_id');
            $table->dropForeign('id_Lista');
            $table->dropForeign('Usuario_id');
        });
    }
};
