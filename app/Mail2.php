<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail2 extends Model
{

	protected $fillable =['sender_name','recipient_name','recipient_email','subject','content'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'mail2s';
}