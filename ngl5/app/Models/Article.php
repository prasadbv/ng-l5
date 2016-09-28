<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	public function getuser()
	{
		return $this->belongsTo('App\Models\User','user_id');
	}
	
}
