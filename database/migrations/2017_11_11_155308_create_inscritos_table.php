<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscritosTable extends Migration
{
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('torneio', 45);
            $table->string('atleta', 45); 
            $table->string('escalao',30); 
            $table->string('descricao', 150);
            $table->timestamps();
        }); 
    }
    
    public function down()
    {
        Schema::dropIfExists('inscritos');
    }
}

