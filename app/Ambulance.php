<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    public function hospital() 
    {
        return $this->belongsTo('App\Hospital');
    }
}
