<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
	protected $fillable =['nome','apelido','sexo','idade','telefone','email','descricao'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'arbitros';
}