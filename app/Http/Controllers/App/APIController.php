<?php

namespace App\Http\Controllers\App;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Events\HospitalEmergencyOthers;

class APIController extends Controller {
    
    private $token = 'UWv2zdE2dYRCTXjUOQFGmgEGPjsQzkiXLrGXLeotUWhw8QExKZbhXU28e3x3';

    public function __construct() {
        
        $this->middleware('guest');
    
    }

    public function event(Request $request) {

    	$user_id = $request['user_id'];
    	$location = $request['location'];
    	$hospital_id = $request['hospital_id'];
    	
    	if($this->token != $request['token']){
    		$response['ERROR'] = 'TOKEN_MISMATCH';
    		return json_encode($response);
    	}
    	$user = User::find($user_id);
    	event(new HospitalEmergencyOthers($user, $location, $hospital_id));

    	$response['SUCCESS'] = 'EVENT_FIRED';
    	return json_encode($response);

    }
}
