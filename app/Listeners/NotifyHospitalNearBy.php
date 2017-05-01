<?php

namespace App\Listeners;

use App\Events\HospitalNearBy;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyHospitalNearBy
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
     * @param  HospitalNearBy  $event
     * @return void
     */
    public function handle(HospitalNearBy $event)
    {
        //
    }
}
