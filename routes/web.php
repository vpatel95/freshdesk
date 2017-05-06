<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', [
	'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('/login', [
	'uses' => 'Auth\LoginController@login',
	'as' => 'login'
]);

Route::get('/register', [
	'uses' => 'Auth\RegisterController@showRegistrationForm'
]);

Route::post('/register', [
	'uses' => 'Auth\RegisterController@register',
	'as' => 'register'
]);

Route::get('/home',[
	'uses' => 'HomeController@dashboard',
	'as' => 'home'
]);

Route::post('/logout', [
	'uses' => 'Auth\LoginController@logout',
	'as' => 'logout'
]);

Route::prefix('hospital')->group(function(){

	Route::get('/appointment', [
		'uses' => 'HospitalController@getAppointmentView',
		'as' => 'hospital.appointments'
	]);

	Route::post('/emergency/accident', [
		'uses' => 'EmergencyController@hospitalEmergencyAccident',
		'as' => 'hospital.emergency.accident'
	]);

	Route::post('/emergency/personal', [
		'uses' => 'EmergencyController@hospitalEmergencyPersonal',
		'as' => 'hospital.emergency.personal'
	]);

	Route::post('/nearby', [
		'uses' => 'HospitalController@nearby',
		'as' => 'hospital.nearby'
	]);

	Route::get('/appointment/{id}', [
		'uses' => 'HospitalController@getIndividualAppointment',
		'as' => 'hospital.appointment'
	]);

});

Route::prefix('police')->group(function() {

	Route::post('/emergency/accident', [
		'uses' => 'EmergencyController@policeEmergencyAccident',
		'as' => 'police.emergency.accident'
	]);

	Route::post('/fir', [
		'uses' => 'PoliceController@policeFir',
		'as' => 'police.fir'
	]);
});

Route::prefix('api/android')->group(function(){
	
	Route::post('/login',[
		'uses' => 'App\LoginController@login'
	]);

	Route::post('/register',[
		'uses' => 'App\LoginController@register'
	]);

	Route::post('/event/hea', [
		'uses' => 'App\APIController@eventHEA'
	]);

	Route::post('/event/hep', [
		'uses' => 'App\APIController@eventHEP'
	]);

	Route::post('/event/pf', [
		'uses' => 'App\APIController@eventPF'
	]);

	Route::post('/event/hnb', [
		'uses' => 'App\APIController@eventHNB'
	]);

	Route::post('/hospital/specialization', [
		'uses' => 'App\APIController@getHospitalBySpeciality'
	]);

	Route::post('/hospital/rating', [
		'uses' => 'App\APIController@getHospitalByRating'
	]);

	Route::post('/hospital/distance', [
		'uses' => 'App\APIController@getHospitalByDistance'
	]);

	Route::post('/ambulance/location', [
		'uses' => 'App\APIController@getAmbulanceLocation'
	]);

	Route::post('/ambulance/unoccupy', [
		'uses' => 'App\APIController@unoccupyAmbulance'
	]);
});