<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserDetail;
use App\Events\UserLoggedIn;
use App\Events\HospitalEmergencyOthers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);

        $email = $request['email'];
        $password = $request['password'];

        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            //event(new HospitalEmergencyOthers(User::where('email',$email)->first(), "User Created", 519));
            return redirect()->route('home');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('welcome');
    }

}