<?php

namespace App\Listeners;

use App\Events\HospitalEmergencyPersonal;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyHospitalEmergencyPersonal
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
     * @param  HospitalEmergencyPersonal  $event
     * @return void
     */
    public function handle(HospitalEmergencyPersonal $event)
    {
        //
    }
}
