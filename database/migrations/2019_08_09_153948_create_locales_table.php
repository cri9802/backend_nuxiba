<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalesTable extends Migration
{
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('pasillo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('locales');
    }
}
