<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model {

	public function user() {
		
        return $this->belongsTo('App\User', 'id');
    }

    public function hospitalEA() {

        return $this->hasMany('App\HospitalEmergencyAccident', 'h_id');
    }

    public function police() {

        return $this->hasMany('App\Police', 'ps_id');
    }
    
}
