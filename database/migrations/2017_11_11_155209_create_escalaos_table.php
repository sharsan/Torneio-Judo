<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscalaosTable extends Migration
{
    public function up()
    {
        Schema::create('escalaos', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nome', 20);  
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('escalaos');
    }
}
