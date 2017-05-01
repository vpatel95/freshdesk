<?php

namespace App\Listeners;

use App\Events\FireStation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyFireStation
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
     * @param  FireStation  $event
     * @return void
     */
    public function handle(FireStation $event)
    {
        //
    }
}
