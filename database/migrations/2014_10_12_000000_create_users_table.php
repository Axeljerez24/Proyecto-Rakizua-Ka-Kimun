<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('');
            $table->string('rut');
            $table->string('Nombres');
            $table->string('Apellidos'); 
            $table->string('Facebook')->nullable(); 
            $table->string('Instagram')->nullable();               
            $table->string('Pais');
            $table->string('Region');
            $table->string('Comuna');
            $table->integer('Edad');                
            $table->string('Pueblo originario')->nullable(); 
            $table->string('Certificado CONADI')->nullable(); 
            $table->integer('Telefono');
            $table->string('Fecha_Nacimiento');                           
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}
