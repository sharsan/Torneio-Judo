<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
	protected $fillable=[ 'torneio','atleta','sexo','escalao','descricao'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'inscritos';
}
