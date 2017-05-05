<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class HospitalNearBy implements ShouldBroadcast {

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $h_id;
    public $disease;

    public function __construct($user, $h_id, $disease) {

        $this->user = $user;
        $this->h_id = $h_id;
        $this->disease = $disease;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('hospitalNearBy.'.$this->h_id);
    }
}
