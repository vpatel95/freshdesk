<?php

namespace App\Listeners;

use App\Events\PoliceEmergencyPersonal;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyPoliceEmergencyPersonal
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
     * @param  PoliceEmergencyPersonal  $event
     * @return void
     */
    public function handle(PoliceEmergencyPersonal $event)
    {
        //
    }
}
