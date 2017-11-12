<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('torneio',40);
            $table->string('escalao',30);
            $table->string('atleta1', 45);
            $table->string('atleta2', 45);
            $table->string('atleta3', 45);
            $table->string('atleta4', 45); 
            $table->string('juri', 40);      
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('grupo4s');
    }
}
