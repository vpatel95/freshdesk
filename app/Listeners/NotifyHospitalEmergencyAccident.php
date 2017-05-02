<?php

namespace App\Listeners;

use App\Events\HospitalEmergencyAccident;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyHospitalEmergencyAccident
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  HospitalEmergencyAccident  $event
     * @return void
     */
    public function handle(HospitalEmergencyAccident $event)
    {
        //
    }
}
