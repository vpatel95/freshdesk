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
        'App\Events\UserLoggedIn' => [
            'App\Listeners\NotifyUserLoggedIn',
        ],

        'App\Events\HospitalEmergencyOthers' => [
            'App\Listeners\NotifyHospitalEmergencyOthers',
        ],

        'App\Events\HospitalEmergencyPersonal' => [
            'App\Listeners\NotifyHospitalEmergencyPersonal',
        ],

        'App\Events\HospitalNearBy' => [
            'App\Listeners\NotifyHospitalNearBy',
        ],

        'App\Events\PoliceEmergencyOthers' => [
            'App\Listeners\NotifyPoliceEmergencyOthers',
        ],

        'App\Events\PoliceEmergencyPersonal' => [
            'App\Listeners\NotifyPoliceEmergencyPersonal',
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
