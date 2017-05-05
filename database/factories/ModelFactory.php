<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
    	'id' => $faker->unique()->numberBetween($min = 561, $max = 580),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role' => 'ambulance',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\UserDetail::class, function (Faker\Generator $faker) {
    static $password;
    static $phoneNo = 9090901000;
    static $emergency = 8989111000;

    return [
    	'id' => $faker->unique()->numberBetween($min = 2, $max = 500),
        'govt_id_no' => rand(100000000000,999999999999),
        'id_type' => 'aadhar',
        'name' => $faker->name,
        'gender' => $faker->randomElement($array = array ('male','female')),
        'address_line_1' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'address_line_2' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'city' => $faker->randomElement($array = array ('Chennai','Coimbatore','Kanchipuram')),
        'state' => 'Tamil Nadu',
        'pincode' => $faker->randomElement($array = array ('603203','603002','600028')),
        'age' => $faker->randomElement($array = array ('21','22','23', '34', '45', '76')),
        'phone_no' => $phoneNo++,
        'emergency_contact' => $emergency++,
    ];
});

$factory->define(App\PoliceStation::class, function (Faker\Generator $faker) {
    static $password;
    static $contact = 9090101000;

    return [
    	'id' => $faker->unique()->numberBetween($min = 501, $max = 510),
        'branch_id' => $faker->unique()->randomNumber($nbDigits = 6),
        'address_line_1' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'address_line_2' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'city' => $faker->randomElement($array = array ('Chennai','Coimbatore','Kanchipuram')),
        'state' => 'Tamil Nadu',
        'pincode' => $faker->randomElement($array = array ('603203','603002','600028')),
        'contact' => $contact++,
    ];
});

$factory->define(App\Hospital::class, function (Faker\Generator $faker) {
    static $password;
    static $contact = 9090201000;
  	$sp['sp'] = 'neurology';
  	$sp['rating'] = 4.6;

    return [
    	'id' => $faker->unique()->numberBetween($min = 511, $max = 520),
    	'name' => $faker->name,
        'address_line_1' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'address_line_2' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'city' => $faker->randomElement($array = array ('Chennai','Coimbatore','Kanchipuram')),
        'state' => 'Tamil Nadu',
        'pincode' => $faker->randomElement($array = array ('603203','603002','600028')),
        'contact' => $contact++,
        'specialization' => json_encode($sp),
        'rating' => $faker->randomElement($array = array('4','4.5','5')),
    ];
});

$factory->define(App\Doctor::class, function (Faker\Generator $faker) {
    static $password;
    static $contact = 9090401000;

    return [
    	'id' => $faker->unique()->numberBetween($min = 521, $max = 530),
    	'h_id' => $faker->unique()->numberBetween($min = 511, $max = 520),
    	'govt_id_no' => rand(100000000000,999999999999),
        'id_type' => 'aadhar',
        'name' => $faker->name,
        'gender' => $faker->randomElement($array = array ('male','female')),
        'specialization' => 'kidney',
        'rating' => 4,
        'contact' => $contact++,
    ];
});

$factory->define(App\Police::class, function (Faker\Generator $faker) {
    static $password;
    static $contact = 9090401000;

    return [
    	'id' => $faker->unique()->numberBetween($min = 531, $max = 540),
    	'ps_id' => $faker->unique()->numberBetween($min = 501, $max = 510),
    	'govt_id_no' => rand(100000000000,999999999999),
        'id_type' => 'aadhar',
        'name' => $faker->name,
        'gender' => $faker->randomElement($array = array ('male','female')),
        'contact' => $contact++,
    ];
});

$factory->define(App\FireStation::class, function (Faker\Generator $faker) {
    static $password;
    static $contact = 9090501000;

    return [
    	'id' => $faker->unique()->numberBetween($min = 541, $max = 550),
    	'branch_id' => $faker->unique()->randomNumber($nbDigits = 6),
    	'city' => $faker->randomElement($array = array ('Chennai','Coimbatore','Kanchipuram')),
        'state' => 'Tamil Nadu',
        'pincode' => $faker->randomElement($array = array ('603203','603002','600028')),
        'contact' => $contact++,
    ];
});

$factory->define(App\Corporation::class, function (Faker\Generator $faker) {
    static $password;
    static $contact = 9090601000;

    return [
    	'id' => $faker->unique()->numberBetween($min = 551, $max = 560),
    	'address_line_1' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'address_line_2' => $faker->sentence($nbWords = 3, $variableNbWords = true),
    	'city' => $faker->randomElement($array = array ('Chennai','Coimbatore','Kanchipuram')),
        'state' => 'Tamil Nadu',
        'pincode' => $faker->randomElement($array = array ('603203','603002','600028')),
        'contact' => $contact++,
    ];
});

$factory->define(App\Ambulance::class, function (Faker\Generator $faker) {
    static $password;
    static $contact = 9090701000;

    return [
        'id' => $faker->unique()->numberBetween($min = 561, $max = 580),
        'h_id' => $faker->numberBetween($min = 511, $max = 520),
        'vehicle_no' => $faker->unique()->numberBetween($min = 1000, $max = 9999),
        'contact' => $contact++,
    ];
});




