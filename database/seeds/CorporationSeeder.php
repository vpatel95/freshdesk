<?php

use Illuminate\Database\Seeder;

class CorporationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    	
        factory(App\Corporation::class, 10)->create();
    }
}
