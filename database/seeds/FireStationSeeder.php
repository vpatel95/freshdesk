<?php

use Illuminate\Database\Seeder;

class FireStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        factory(App\FireStation::class, 10)->create();
    }
}
