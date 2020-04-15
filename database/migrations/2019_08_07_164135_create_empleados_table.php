<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
   public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->string('fn');
            $table->string('direccion');
            $table->string('correo');
            $table->string('pass');
            $table->integer('genero');
      

            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
