<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model {

	public function user() {
		
        return $this->belongsTo('App\User', 'id');
    }

    public function hospitalEA() {

        return $this->hasMany('App\HospitalEmergencyAccident', 'h_id');
    }

    public function hospitalEN() {

        return $this->hasMany('App\HospitalEmergencyNearBy', 'h_id');
    }

    public function ambulance() {

        return $this->hasMany('App\Ambulance', 'h_id');
    }
    
}
