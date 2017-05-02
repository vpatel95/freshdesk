<?php

namespace App\Listeners;

use App\Events\AmbulanceRequested;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAmbulance
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
     * @param  AmbulanceRequested  $event
     * @return void
     */
    public function handle(AmbulanceRequested $event)
    {
        //
    }
}
