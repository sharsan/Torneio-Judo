<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $fillable=[ 'nome'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'categorias'; 
}
