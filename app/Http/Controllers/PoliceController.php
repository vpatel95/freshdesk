<?php

namespace App\Http\Controllers;

use App\PoliceFir;
use App\UserDetail;
use Illuminate\Http\Request;

class PoliceController extends Controller {
    
    public function policeFir(Request $request) {

    	$address = $request['address'];
    	$u_id = $request['u_id'];
    	$ps_id = $request['ps_id'];
    	$category = $request['category'];
    	$description = $request['description'];
    	$media = $request['media'];
    	$latitude = $request['latitude'];
    	$longitude = $request['longitude'];

    	$fir = new PoliceFir();
        $fir->u_id = $u_id;
        $fir->ps_id = $ps_id;
        $fir->category = $category;
        $fir->description = $description;
        $fir->latitude = $latitude;
        $fir->longitude = $longitude;
        $fir->media = $media;
        $fir->address = $address;
        $fir->save();

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
}
