<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luta extends Model
{
	protected $fillable=[ 'grupo','escalao','atleta1','atleta2','juri','vencedor','descricao']; 

	protected $guarded = ['id', 'created_at', 'update_at'];  

	protected $table = 'lutas'; 

} 