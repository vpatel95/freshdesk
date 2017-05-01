<?php

use Illuminate\Database\Seeder;

class PoliceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Police::class, 10)->create();
    }
}
