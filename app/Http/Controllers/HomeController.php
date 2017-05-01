<?php

namespace App\Http\Controllers;

use User;
use UserDetail;
use Hospital;
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
        return view('dashboards.' . $user->role, ['user' => $user]);
    }
}
