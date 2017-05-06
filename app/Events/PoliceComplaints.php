<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PoliceComplaints implements ShouldBroadcast {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $police;
    public $category;
    public $description;
    public $media;
    public $latitude;
    public $longitude;

    public function __construct($user, $police, $category, $description, $media, $latitude, $longitude) {

        $this->user = $user;
        $this->police = $police;
        $this->category = $category;
        $this->description = $description;
        $this->media = $media;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('policeFir.'.$this->police);
    }
}
