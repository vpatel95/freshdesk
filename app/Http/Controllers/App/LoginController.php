<?php

namespace App\Http\Controllers\App;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

	private $token = 'UWv2zdE2dYRCTXjUOQFGmgEGPjsQzkiXLrGXLeotUWhw8QExKZbhXU28e3x3';

	public function __construct() {
        
        $this->middleware('guest');
    
    }

    private function getId() {
        if(User::all()->count() > 0) {
            $id = User::max('id');
            return $id+1;
        }

        return 1;
    }

    public function login(Request $request) {

    	if($this->token != $request['token']){
    		$response['ERROR'] = 'TOKEN_MISMATCH';
    		return json_encode($response);
    	}

    	$email = $request['email'];
    	$password = $request['password'];

    	if(Auth::once(['email' => $email, 'password' => $password])){
    		$user = User::where('email',$email)->first();
    		$response['success'] = 'LOGIN_SUCCESS';
    		$response['user'] = $user;
    		return json_encode($response);

    	} else {
    		$response['ERROR'] = 'INVALID_CREDENTIALS';
    	}


    	return json_encode($response);

    }

    public function register(Request $request) {

    	if($this->token != $request['token']){
    		$response['ERROR'] = 'TOKEN_MISMATCH';
    		return json_encode($response);
    	}

        $email = $request['email'];
        $govt_id_no = $request['govt_id_no'];
        $phone_no = $request['phone_no'];

        if(User::where('email',$email)->exists()){
            $response['ERROR'] = 'EMAIL_ALREADY_TAKEN';
            return json_encode($response);
        }

        if(UserDetail::where('govt_id_no',$govt_id_no)->exists()){
            $response['ERROR'] = 'GOVERNMENT_ID_ALREADY_TAKEN';
            return json_encode($response);
        }

        if(UserDetail::where('phone_no',$phone_no)->exists()){
            $response['ERROR'] = 'PHONE_NO_ALREADY_TAKEN';
            return json_encode($response);
        }



        $name = $request['name'];
        $gender = $request['gender'];
        $id_type = $request['id_type'];
        $govt_id_no = $request['govt_id_no'];
        $age = $request['age'];
        $address_line_1 = $request['address_line_1'];
        $address_line_2 = $request['address_line_2'];
        $city = $request['city'];
        $state = $request['state'];
        $pincode = $request['pincode'];
        $emergency_contact = $request['emergency_contact'];
        $password = $request['password'];
        $id = $this->getId();

        $user = new User();
        $user->id = $id;
        $user->email = $email;
        $user->password = bcrypt($password);

        $user_det = new UserDetail();
        $user_det->id = $id;
        $user_det->govt_id_no = $govt_id_no;
        $user_det->id_type = $id_type;
        $user_det->name = $name;
        $user_det->gender = $gender;
        $user_det->address_line_1 = $address_line_1;
        $user_det->address_line_2 = $address_line_2;
        $user_det->city = $city;
        $user_det->state = $state;
        $user_det->pincode = $pincode;
        $user_det->age = $age;
        $user_det->phone_no = $phone_no;
        $user_det->emergency_contact = $emergency_contact;
        $user->save();
        $user_det->save();

    	if(Auth::once(['email' => $email, 'password' => $password])) {
    		$user = User::where('email',$email)->first();
    		$response['success'] = 'REGISTER_SUCCESS';
    		$response['user'] = $user;
    		return json_encode($response);
    	}
    }

}
