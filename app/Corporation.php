<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporation extends Model {

	public function user() {
		
        return $this->belongsTo('App\User', 'id');
    }
    
}
