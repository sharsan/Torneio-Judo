<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luta extends Model
{
	protected $fillable=[ 'torneio','escalao','juri','primeiro','segundo','terceiro','descricao']; 

	protected $guarded = ['id', 'created_at', 'update_at'];  

	protected $table = 'lutas'; 

} 