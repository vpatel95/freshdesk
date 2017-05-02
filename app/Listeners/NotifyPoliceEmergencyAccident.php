<?php

namespace App\Listeners;

use App\Events\PoliceEmergencyAccident;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyPoliceEmergencyAccident
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
     * @param  PoliceEmergencyAccident  $event
     * @return void
     */
    public function handle(PoliceEmergencyAccident $event)
    {
        //
    }
}
