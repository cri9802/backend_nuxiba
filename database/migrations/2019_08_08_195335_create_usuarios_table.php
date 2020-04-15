<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
        
            $table->string('correo');
            $table->string('pass');
            $table->integer('tipo');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
