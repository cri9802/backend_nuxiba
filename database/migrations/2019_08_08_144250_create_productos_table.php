<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('modelo');
            $table->string('color');
            $table->string('talla');
            $table->string('tipo');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
