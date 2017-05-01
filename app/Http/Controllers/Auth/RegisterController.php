<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private function getId() {
        if(User::all()->count() > 0) {
            $id = User::max('id');
            return $id+1;
        }

        return 1;
    }

    public function __construct() {

        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    public function register(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'gender' => 'required',
            'id_type' => 'required',
            'govt_id_no' => 'required',
            'age' => 'required|integer',
            'phone_no' => 'required|string|max:10|min:10',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'emergency_contact' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $name = $request['name'];
        $gender = $request['gender'];
        $id_type = $request['id_type'];
        $govt_id_no = $request['govt_id_no'];
        $age = $request['age'];
        $phone_no = $request['phone_no'];
        $address_line_1 = $request['address_line_1'];
        $address_line_2 = $request['address_line_2'];
        $city = $request['city'];
        $state = $request['state'];
        $pincode = $request['pincode'];
        $emergency_contact = $request['emergency_contact'];
        $email = $request['email'];
        $password = $request['password'];
        $id = $this->getId();

        $user = new User();
        $user->id = $id;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

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
        $user_det->save();

        if(Auth::attempt(['email' => $email, 'password' => $password])) {

            return redirect()->route('home');
        }
    }
}
