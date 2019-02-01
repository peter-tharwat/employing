<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exp extends Model
{
   public $table= 'experince';




   public function user()
	{
	    return $this->belongsTo('App\User');
	}



}
