<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	public function articles(){
		return $this->hasMany('App\Models\Article');
	} 	
	public $timestamps = false;
}
