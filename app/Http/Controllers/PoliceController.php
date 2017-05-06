<?php

namespace App\Http\Controllers;

use App\PoliceFir;
use App\UserDetail;
use Illuminate\Http\Request;

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
}
