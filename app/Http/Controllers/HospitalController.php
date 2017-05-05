<?php

namespace App\Http\Controllers;

use App\User;
use App\PoliceStation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\HospitalEmergencyNearBy;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller {

	public function getAppointmentView() {
		return view('hospital.appointments', [
			'appointment' => HospitalEmergencyNearBy::all()->where('h_id',Auth::user()->id)
		]);
	}

	public function nearby(Request $request) {

		$user = $request['user'];
		$h_id = $request['h_id'];
		$disease = $request['disease'];
		$data['test'] = 'NULL';
		$nb = new HospitalEmergencyNearBy();
		$nb->u_id = $user;
		$nb->h_id = $h_id;
		$nb->disease = $disease;
		$nb->tests = json_encode($data);
		$nb->appointment_date = '2017-06-03 15:00:00';
		$nb->self = true;
		$nb->save();

		return response()->json([
			'id' => $user,
			'user' => User::find($user)->userDetail->name,
			'disease' => $disease,
			'appointment' => '2017-06-03 15:00:00'
		]);
	}

	public function getIndividualAppointment($id) {
		return view('hospital.appointment');
	}
    
}
