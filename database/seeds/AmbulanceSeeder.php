<?php

use Illuminate\Database\Seeder;

class AmbulanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ambulance::class, 20)->create();
    }
}
