<?php

namespace App\Http\Controllers\App;

use App\User;
use App\UserDetail;
use App\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Events\HospitalNearBy;
use App\Events\HospitalEmergencyAccident;
use App\Events\HospitalEmergencyPersonal;

class APIController extends Controller {
    
    private $token = 'UWv2zdE2dYRCTXjUOQFGmgEGPjsQzkiXLrGXLeotUWhw8QExKZbhXU28e3x3';

    public function __construct() {
        
        $this->middleware('guest');
    
    }

    private function getDistance($lat1, $lat2, $lon1, $lon2) {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $km = $dist * 60 * 1.1515 * 1.609344;
        return $dist;
    }

    public function eventHEA(Request $request) {

        if($this->token != $request['token']){
            return response()->json([
                'ERROR' => 'TOKEN_MISMATCH'
            ]);
        }

    	$user = $request['user'];
        $h_id = $request['h_id'];
        $ps_id = $request['ps_id'];
        $lat = $request['lat'];
        $lon = $request['lon'];
        $self = $request['self'];

    	if(event(new HospitalEmergencyAccident($user, $h_id, $ps_id, $lat, $lon, $self)))
        	return response()->json([
                'SUCCESS' => 'EVENT_FIRED'
            ]);

        return response()->json([
            'ERROR' => 'EVENT_FIRE_FAIL'
        ]);
    }

    public function eventHEP(Request $request) {
        
        if($this->token != $request['token']){
            return response()->json([
                'ERROR' => 'TOKEN_MISMATCH'
            ]);
        }

        $user = $request['user'];
        $h_id = $request['h_id'];
        $lat = $request['lat'];
        $lon = $request['lon'];
        $self = $request['self'];

        if(event(new HospitalEmergencyPersonal($user, $h_id, $lat, $lon, $self)))
            return response()->json([
                'SUCCESS' => 'EVENT_FIRED'
            ]);

        return response()->json([
            'ERROR' => 'EVENT_FIRE_FAIL'
        ]);
    }

    public function eventHNB(Request $request) {

        if($this->token != $request['token']){
            return response()->json([
                'ERROR' => 'TOKEN_MISMATCH'
            ]);
        }

        $user = $request['user_id'];
        $h_id = $request['h_id'];
        $disease = $request['disease'];

        if(event(new HospitalNearBy($user, $h_id, $disease)))
            return response()->json([
                'SUCCESS' => 'EVENT_FIRED'
            ]); 

        return response()->json([
            'ERROR' => 'EVENT_FIRE_FAIL'
        ]);       
    }

    public function getHospitalBySpeciality(Request $request) {
        
        if($this->token != $request['token']){
            return response()->json([
                'ERROR' => 'TOKEN_MISMATCH'
            ]);
        }

        $sp = $request['specialization'];
        $hs_sp = Hospital::where('specialization->sp',$sp)->get();

        if(sizeof($hs_sp) == 0){
            return response()->json([
                'hospital' => 'NO_HOSPITAL_FOUND'
            ]);
        }

        for ($i=0; $i < sizeof($hs_sp); $i++) { 
            $hos[$i]['id'] = $hs_sp[$i]['id'];
            $hos[$i]['name'] = $hs_sp[$i]['name'];
        }

        return response()->json([
            'hospital' => $hos
        ]);
    }

    public function getHospitalByRating(Request $request) {

        if($this->token != $request['token']){
            return response()->json([
                'ERROR' => 'TOKEN_MISMATCH'
            ]);
        }

        $rating = $request['rating'];

        $hospital = Hospital::where('rating', '>', $rating)->orderBy('rating', 'desc')->get();

        if(sizeof($hospital) == 0){
            return response()->json([
                'hospital' => 'NO_HOSPITAL_FOUND'
            ]);
        }

        for ($i=0; $i < sizeof($hospital); $i++) { 
            $hos[$i]['id'] = $hs_sp[$i]['id'];
            $hos[$i]['name'] = $hs_sp[$i]['name'];
        }

        return response()->json([
            'hospital' => $hospital
        ]);
        
    }

    public function getHospitalByDistance(Request $request) {
        
        if($this->token != $request['token']){
            return response()->json([
                'ERROR' => 'TOKEN_MISMATCH'
            ]);
        }

        $lat = $request['lat'];
        $lon = $request['lon'];

        $hos = Hospital::all();

        if(sizeof($hos) == 0){
            return response()->json([
                'hospital' => 'NO_HOSPITAL_FOUND'
            ]);
        }

        for ($i=0; $i < sizeof($hos); $i++) { 
            $h[$i]['id'] = $hos[$i]['name'];
            $h[$i]['dist'] = $this->getDistance($lat, $hos[$i]['latitude'],$lon, $hos[$i]['longitude']);
            $h[$i]['rating'] = $hos[$i]['rating'];
        }

        return response()->json([
            'hospital' => $h
        ]);
    }
}
