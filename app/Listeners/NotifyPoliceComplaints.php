<?php

namespace App\Listeners;

use App\Events\PoliceComplaints;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyPoliceComplaints
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
     * @param  PoliceComplaints  $event
     * @return void
     */
    public function handle(PoliceComplaints $event)
    {
        //
    }
}
