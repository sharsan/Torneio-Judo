<?php 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArbitrosTable extends Migration
{ 
    public function up()
    {
        Schema::create('arbitros', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('apelido', 15); 
            $table->string('sexo', 2);
            $table->integer('idade');           
            $table->integer('telefone'); 
            $table->string('email', 40);     
            $table->string('descricao', 100);   
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arbitros');
    }
} 
