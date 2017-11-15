<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daw extends Model
{  
	protected $fillable =['emissor','cc','inputPassword1','message','subject'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'daws';
}

// {  
// 	protected $fillable =['para','Cc','subject','message'];

// 	protected $guarded = ['id', 'created_at', 'update_at'];  

// 	protected $table = 'daws';
// }
