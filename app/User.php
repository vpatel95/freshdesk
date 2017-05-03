<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userDetail(){

        return $this->hasOne('App\UserDetail', 'id');
    }

    public function policeStation(){
        
        return $this->hasOne('App\PoliceStation', 'id');
    }

    public function hospital(){
        
        return $this->hasOne('App\Hospital', 'id');
    }

    public function doctor(){
        
        return $this->hasOne('App\Doctor', 'id');
    }

    public function police(){
        
        return $this->hasOne('App\Police', 'id');
    }

    public function corporation(){
        
        return $this->hasOne('App\Corporation', 'id');
    }   

    public function fireStation(){
        
        return $this->hasOne('App\FireStation', 'id');
    }

}
