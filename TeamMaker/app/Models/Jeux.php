<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jeux extends Model
{
        	public function sujets(){
		return $this->HasMany('App\Models\Sujet');
	}
}
