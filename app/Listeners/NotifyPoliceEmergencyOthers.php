<?php

namespace App\Listeners;

use App\Events\PoliceEmergencyOthers;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyPoliceEmergencyOthers
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
     * @param  PoliceEmergencyOthers  $event
     * @return void
     */
    public function handle(PoliceEmergencyOthers $event)
    {
        //
    }
}
