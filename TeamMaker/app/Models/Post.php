<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        public function jeux(){
		return $this->belongsTo('App\Models\Jeux');
	}
}