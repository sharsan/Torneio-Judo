<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneio extends Model
{
	protected $fillable=[ 'nome', 'datai', 'datat', 'descricao'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'torneios';
}       