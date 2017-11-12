        $table->string('treinador', 40);  
        <?php

        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;

        class CreateAtletasTable extends Migration
        {
           public function up()
           {
            Schema::create('atletas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 45);
                $table->string('apelido', 15);
                $table->string('cinturao', 30);
                $table->string('clube', 50);
                $table->string('categoria',100);
                $table->string('escalao',30);
                $table->double('peso', 4);
                $table->string('sexo', 2);
                $table->integer('idade');           
                $table->integer('telefone'); 
                $table->string('email', 40); 
                $table->string('treinador', 40);  
                $table->string('descricao', 150);
            });
        } 
        public function down()
        {
            Schema::dropIfExists('atletas');
        }
    }