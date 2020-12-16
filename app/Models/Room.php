<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function master_rooms()
    {
        return $this->hasMany('App\Models\MasterRoom');
    }

    public function single_rooms()
    {
        return $this->hasMany('App\Models\SingleRoom');
    }

    public function living_rooms()
    {
        return $this->hasMany('App\Models\LivingRoom');
    }

    public function dinning_rooms()
    {
        return $this->hasMany('App\Models\DinningRoom');
    }

    public function kitchens()
    {
        return $this->hasMany('App\Models\Kitchen');
    }

    public function projects()
    {
        return $this->belongsTo('App\Models\Project');
    }

    public function carts()
    {
        return $this->hasMany('App\Models\Cart');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

}
