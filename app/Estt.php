<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estt extends Model
{
	protected $fillable=[ 'torneio','estado'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'estts';
} 