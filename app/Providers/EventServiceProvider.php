<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [

        'App\Events\HospitalEmergencyAccident' => [
            'App\Listeners\NotifyHospitalEmergencyAccident',
        ],

        'App\Events\AmbulanceRequested' => [
            'App\Listeners\SendAmbulance',
        ],

        'App\Events\HospitalEmergencyPersonal' => [
            'App\Listeners\NotifyHospitalEmergencyPersonal',
        ],

        'App\Events\HospitalNearBy' => [
            'App\Listeners\NotifyHospitalNearBy',
        ],

        'App\Events\PoliceEmergencyAccident' => [
            'App\Listeners\NotifyPoliceEmergencyAccident',
        ],

        'App\Events\PoliceComplaints' => [
            'App\Listeners\NotifyPoliceComplaints',
        ],

        'App\Events\FireStation' => [
            'App\Listeners\NotifyFireStation',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
