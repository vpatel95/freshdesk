<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AmbulanceRequested implements ShouldBroadcast {

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $ambulance;
    public $contact;
    public $lat;
    public $lon;
    public $h_id;

    public function __construct($user, $contact, $lat, $lon, $h_id, $ambulance) {

        $this->user = $user;
        $this->ambulance = $ambulance;
        $this->contact = $contact;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->h_id = $h_id;
        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('ambulance.'.$this->ambulance);
    }
}
