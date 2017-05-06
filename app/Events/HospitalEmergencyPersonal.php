<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class HospitalEmergencyPersonal implements ShouldBroadcast {

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $h_id;
    public $lat;
    public $lon;
    public $self;
    public $address;

    public function __construct($user, $h_id, $lat, $lon, $self=false, $address) {

        $this->user = $user;
        $this->h_id = $h_id;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->self = $self;
        $this->address = $address;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('hospitalEmergencyPersonal.'.$this->h_id);
    }
}
