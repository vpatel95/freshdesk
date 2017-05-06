<?php

namespace App\Http\Controllers;

use App\PoliceEmergencyAccident;
use App\HospitalEmergencyAccident;
use App\HospitalEmergencyPersonal;
use App\PoliceStation;
use App\User;
use App\Hospital;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmergencyController extends Controller {

	//DONE CHECKING-LEFT
	public function hospitalEmergencyAccident(Request $request) {

		$user = $request['user'];
		$ps_id = $request['ps_id'];
		$h_id = $request['h_id'];
		$address = $request['address'];

		$ps = PoliceStation::find($ps_id);
		$ps_add = $ps->address_line_1 . ', ' . $ps->address_line_2 . ', ' . $ps->city;

		return response()->json([
		    'user' => User::find($user)->userDetail->name,
		    'user_contact' => User::find($user)->userDetail->phone_no,
		    'police' => $ps_add,
		    'ps_contact' => $ps->contact,
		    'address' => $address
		]);
	}

	public function hospitalEmergencyPersonal(Request $request) {
		
		$address = $request['address'];
		$user = $request['user'];
		$h_id = $request['h_id'];

		

		return response()->json([
		    'user' => User::find($user)->userDetail->name,
		    'user_contact' => User::find($user)->userDetail->phone_no,
		    'address' => $address
		]);
	}

	public function policeEmergencyAccident(Request $request) {

		$address = $request['address'];
		$user = $request['notifier'];
		$hospital = $request['hospital'];
		$lat = $request['lat'];
		$lon = $request['lon'];
		$ps_id = $request['ps_id'];

		

		$h = Hospital::find($hospital);

		return response()->json([
			'notifier' => User::find($user)->userDetail->name,
			'notifier_contact' => User::find($user)->userDetail->phone_no,
			'hospital' => $h->name,
			'hospital_contact' => $h->contact,
			'hospital_address' => $h->address_line_1 . '. ' . $h->address_line_2 . '. ' . $h->city
		]);
	}
    
}
