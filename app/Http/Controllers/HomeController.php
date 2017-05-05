<?php

namespace App\Http\Controllers;

use User;
use UserDetail;
use Hospital;
use App\HospitalEmergencyAccident;
use App\PoliceEmergencyAccident;
use App\HospitalEmergencyNearBy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
        $this->middleware('auth');
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard() {

        $user = Auth::user();
        if($user->role === 'hospital') {
            $data['hea'] = HospitalEmergencyAccident::all()->where('h_id', $user->id);
            $data['hnb'] = HospitalEmergencyNearBy::all()->where('h_id', $user->id);
        } elseif ($user->role === 'police_station') {
            $data['pea'] = PoliceEmergencyAccident::all()->where('ps_id', $user->id);
        }
        return view('dashboards.' . $user->role, [
            'user' => $user,
            'data' => $data
        ]);
    }
}
