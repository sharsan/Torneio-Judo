<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luta34 extends Model
{
	protected $fillable=[ 'torneio','atleta3','atleta4','juri','escalao','vencedor34','vencido','descricao']; 

	protected $guarded = ['id', 'created_at', 'update_at'];  

	protected $table = 'luta34s'; 
	
}
