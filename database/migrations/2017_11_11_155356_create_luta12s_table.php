<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuta12sTable extends Migration
{
    public function up()
    {

        Schema::create('luta12s', function (Blueprint $table) {

            $table->increments('id'); 
            $table->string('torneio', 40);
            $table->string('escalao', 40);
            $table->string('atleta1', 40); 
            $table->string('atleta2', 40); 
            $table->string('juri', 40); 
            $table->string('vencedor', 40);
            $table->string('vencido', 40); 
            $table->string('descricao', 150); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('luta12s');
    }
}

