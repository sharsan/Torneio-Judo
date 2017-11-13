<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLutasTable extends Migration
{
    public function up()
    {
        Schema::create('lutas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('torneio', 45);
            $table->string('escalao', 40); 
            $table->string('primeiro', 40); 
            $table->string('segundo', 40); 
            $table->string('terceiro', 40);  
            $table->string('juri', 40); 
            $table->string('descricao', 150); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lutas');
    }
}
