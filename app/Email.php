<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{

	
	protected $fillable =['to','Cc','subject','message'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'Emails';
}
