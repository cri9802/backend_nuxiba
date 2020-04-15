<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    
     public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
             $table->string('app');
            $table->string('apm');
            $table->string('empresa');
            $table->integer('genero');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
