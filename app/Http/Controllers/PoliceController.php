<?php

namespace App\Http\Controllers;

use App\User;
use App\PoliceStation;
use App\Hospital;
use App\UserDetail;
use App\PoliceFir;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\HospitalEmergencyNearBy;
use Illuminate\Support\Facades\Auth;
class PoliceController extends Controller {
    
    public function policeFir(Request $request) {

    	$address = $request['address'];
    	$u_id = $request['u_id'];
    	$category = $request['category'];
    	$description = $request['description'];
    	$media = $request['media'];

        if($media === 'NULL')
	        return response()->json([
	        	'is_media' => false,
	        	'name' => UserDetail::find($u_id)->name,
	        	'category' => $category,
	        	'description' => $description,
	        	'address' => $address
	        ]);
	    else 
	    	return response()->json([
	    		'is_media' => true,
	    		'media' => $media,
	    		'name' => UserDetail::find($u_id)->name,
	        	'category' => $category,
	        	'description' => $description,
	        	'address' => $address
	    	]);
    }

    public function getFirView() {
    	return view('police.firs', [
    		'fir' => PoliceFir::all()->where('ps_id', Auth::user()->id)
    	]);
    }

    public function getIndividualFir($id) {
    	return view('police.fir', [
    		'fir' => PoliceFir::find($id),
			'hospital' => Hospital::find(Auth::user()->id),
			'user' => userDetail::find(HospitalEmergencyNearBy::find($id)->u_id)
    	]);
    }
}