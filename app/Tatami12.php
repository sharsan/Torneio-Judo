<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tatami12 extends Model
{
	protected $fillable=[ 'torneio','atleta1','atleta2','juri','escalao','sexo','vencedor12','vencido','descricao']; 

	protected $guarded = ['id', 'created_at', 'update_at'];  

	protected $table = 'tatami12'; 

}
