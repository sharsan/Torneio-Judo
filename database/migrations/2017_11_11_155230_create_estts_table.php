<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsttsTable extends Migration
{
    
    public function up()
    {
        Schema::create('estts', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('estado', 45); 
            $table->string('torneio', 45); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('estts');
    }
}
