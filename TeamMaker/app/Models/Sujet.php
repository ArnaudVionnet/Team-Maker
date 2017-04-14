<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
        	public function jeux(){
		return $this->belongsTo('App\Models\Jeux');
	}
	    public function post(){
    	return $this->HasMany('App\Models\Post');}
}
