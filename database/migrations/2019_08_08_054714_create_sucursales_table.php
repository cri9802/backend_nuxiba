<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesTable extends Migration
{
     public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('calle');
            $table->string('numint');
            $table->string('numext');
            $table->string('municipio');
            $table->string('estado');
            $table->string('cp');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('sucursales');
    }
}
