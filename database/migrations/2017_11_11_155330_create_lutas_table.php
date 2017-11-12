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
            $table->string('grupo', 40);
            $table->string('atleta1', 40); 
            $table->string('atleta2', 40); 
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
