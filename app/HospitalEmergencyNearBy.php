<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalEmergencyNearBy extends Model {

    public function hospital() {

    	return $this->belongsTo('App\Hospital', 'h_id');
    }
    
}
