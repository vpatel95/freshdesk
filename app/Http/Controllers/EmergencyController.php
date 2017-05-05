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

	public function policeEmergencyAccident(Request $request) {

		$address = $request['address'];
		$user = $request['notifier'];
		$hospital = $request['hospital'];
		$lat = $request['lat'];
		$lon = $request['lon'];
		$ps_id = $request['ps_id'];

		$pea = new PoliceEmergencyAccident();
		$pea->u_id = $user;
		$pea->h_id = $hospital;
		$pea->latitude = $lat;
		$pea->longitude = $lon;
		$pea->ps_id = $ps_id;
		$pea->accident_address = $address;
		$pea->save();

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
