<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PoliceEmergencyAccident implements ShouldBroadcast {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $notifier;
    public $hospital;
    public $id;
    public $lat;
    public $lon;

    public function __construct($id, $user, $hospital, $lat, $lon) {

        $this->notifier = $user;
        $this->hospital = $hospital;
        $this->id = $id;
        $this->lat = $lat;
        $this->lon = $lon;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('policeEmergencyAccident.'.$this->id);
    }
}
