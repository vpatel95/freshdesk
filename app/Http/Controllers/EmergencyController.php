<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class EmergencyController extends Controller {

	public function hospitalEmergencyAccident(Request $request) {
		$

		$location = $request['response'];

		dd($location);

		return response()->json([
		    'status' => 200,
		    'user' => $user,
		    'location' => $location,
		    'hospital' => $hospital
		]);
	}
    
}
