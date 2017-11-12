<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinalistasTable extends Migration
{
    public function up()
    {
        Schema::create('finalistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('torneio', 45);
            $table->string('escalao', 45);
            $table->string('vencedor12', 45);
            $table->string('vencedor34', 45);
            $table->string('juri', 45);
            $table->string('primeiro', 45);
            $table->string('segundo', 45);
            $table->string('descricao', 155); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('finalistas');
    }
}
