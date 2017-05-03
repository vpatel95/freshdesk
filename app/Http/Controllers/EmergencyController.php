<?php

namespace App\Http\Controllers;

use App\HospitalEmergencyAccident;
use App\HospitalEmergencyPersonal;
use App\PoliceStation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class EmergencyController extends Controller {

	public function hospitalEmergencyAccident(Request $request) {

		$type = $request['type'];
		$address = $request['address'];
		$user = $request['user'];
		$lat = $request['lat'];
		$lon = $request['lon'];
		$ps_id = $request['ps_id'];
		$h_id = $request['h_id'];
		$self = $request['self'] === 'true' ? true : false;

		$hea = new HospitalEmergencyAccident();
		$hea->type = $type;
		$hea->u_id = $user;
		$hea->h_id = $h_id;
		$hea->ps_id = $ps_id;
		$hea->latitude = $lat;
		$hea->longitude = $lon;
		$hea->address = $address;
		$hea->self = $self;
		$hea->save();

		$ps = PoliceStation::find($ps_id);
		$ps_add = $ps->address_line_1 . ', ' . $ps->address_line_2 . ', ' . $ps->city;

		return response()->json([
		    'user' => User::find($user)->userDetail->name,
		    'user_contact' => User::find($user)->userDetail->phone_no,
		    'police' => $ps_add,
		    'ps_contact' => $ps->contact,
		    'address' => $address,
		    'self' => $self
		]);
	}

	public function hospitalEmergencyPersonal(Request $request) {
		
		$type = $request['type'];
		$address = $request['address'];
		$user = $request['user'];
		$lat = $request['lat'];
		$lon = $request['lon'];
		$h_id = $request['h_id'];
		$self = $request['self'] === 'true' ? true : false;

		$hea = new HospitalEmergencyAccident();
		$hea->type = $type;
		$hea->u_id = $user;
		$hea->h_id = $h_id;
		$hea->latitude = $lat;
		$hea->longitude = $lon;
		$hea->address = $address;
		$hea->self = $self;
		$hea->save();

		return response()->json([
		    'user' => User::find($user)->userDetail->name,
		    'user_contact' => User::find($user)->userDetail->phone_no,
		    'address' => $address,
		    'self' => $self
		]);
	}
    
}
