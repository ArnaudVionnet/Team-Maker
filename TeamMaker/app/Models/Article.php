<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
                  public function commentaires(){
    	return $this->HasMany('App\Commentaire');}
}
