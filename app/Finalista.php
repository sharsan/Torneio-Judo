<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finalista extends Model
{
	protected $fillable=['torneio','escalao','vencedor12','vencedor34','juri','primeiro', 'segundo', 'descricao'];

	protected $guarded = ['id', 'created_at', 'update_at'];

	protected $table = 'finalistas';
}
