<?php

namespace App\Listeners;

use App\Events\HospitalEmergencyOthers;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyHospitalEmergencyOthers
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
     * @param  HospitalEmergencyOthers  $event
     * @return void
     */
    public function handle(HospitalEmergencyOthers $event)
    {
        //
    }
}
