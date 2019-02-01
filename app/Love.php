<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Love extends Model
{

	public $table="loves";

    public function user(){
    	return $this->belongsTo('App\User');
    }

    
}
