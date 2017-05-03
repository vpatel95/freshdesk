<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalEmergencyAccident extends Model {

    public function hospital() {

    	return $this->belongsTo('App\Hospital', 'h_id');
    }

    public function policeStation() {

    	return $this->belongsTo('App\PoliceStation', 'ps_id');
    }
    
}
