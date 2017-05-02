<?php

namespace App\Http\Controllers\App;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Events\HospitalEmergencyAccident;

class APIController extends Controller {
    
    private $token = 'UWv2zdE2dYRCTXjUOQFGmgEGPjsQzkiXLrGXLeotUWhw8QExKZbhXU28e3x3';

    public function __construct() {
        
        $this->middleware('guest');
    
    }

    public function event(Request $request) {

    	$user = $request['user'];
        $h_id = $request['h_id'];
        $ps_id = $request['ps_id'];
        $lat = $request['lat'];
        $lon = $request['lon'];
        $self = $request['self'];
    	
    	if($this->token != $request['token']){
    		return response()->json([
                'ERROR' => 'TOKEN_MISMATCH'
            ]);
    	}

    	event(new HospitalEmergencyAccident($user, $h_id, $ps_id, $lat, $lon, $self));

    	return response()->json([
            'SUCCESS' => 'EVENT_FIRED'
        ]);

    }
}
