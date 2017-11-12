<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terceiro extends Model
{
	protected $fillable=['torneio','escalao','vencido12','vencido34','juri','terceiro','descricao'];

	protected $guarded = ['id', 'created_at', 'update_at'];

	protected $table = 'terceiros';
}
