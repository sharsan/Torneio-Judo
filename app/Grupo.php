<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
	protected $fillable=['torneio','escalao','atleta1','atleta2','atleta3','atleta4','juri','descricao'];

	protected $guarded = ['id', 'created_at', 'update_at'];  

	protected $table = 'grupos';
}
