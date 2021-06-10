<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nivel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel', function (Blueprint $table){
            $table->id('');
            $table->integer('numero_nivel');
            $table->string('nombre_nivel');
            $table->string('estado_nivel');
            $table->float('promedio_nivel');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivel');
    }
}
