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
    public $date_time;
    public $location;
    public $accused;
    public $witness;

    public function __construct($user, $police, $category, $description, $media, $date_time, $location, $accused, $witness) {

        $this->user = $user;
        $this->police = $police;
        $this->category = $category;
        $this->description = $description;
        $this->media = $media;
        $this->date_time = $date_time;
        $this->location = $location;
        $this->accused = $accused;
        $this->witness = $witness;
        
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
