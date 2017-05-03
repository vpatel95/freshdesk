<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Police extends Model {

	public function user() {
		
        return $this->belongsTo('App\User', 'id');
    }

    public function policeStation() {

        return $this->hasMany('App\PoliceStation', 'ps_id');
    }
    
}
