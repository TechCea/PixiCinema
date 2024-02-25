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
        Schema::table('historial', function (Blueprint $table) {
            $table->foreign(['Perfil_id'], 'Perfil_id')->references(['id'])->on('perfiles')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['Tipo_id'], 'Tipo_id')->references(['id'])->on('tipo_video')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historial', function (Blueprint $table) {
            $table->dropForeign('Perfil_id');
            $table->dropForeign('Tipo_id');
        });
    }
};
