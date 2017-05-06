<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class FireStation
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $fire;
    public $lat;
    public $lon;
    public $address;

    public function __construct($user, $fire, $lat, $lon, $address) {
        $this->user = $user;
        $this->fire = $fire;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->address = $address;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('fireEmergency.'.$this->fire);
    }
}
