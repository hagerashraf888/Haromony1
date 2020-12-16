<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function master_beds()
    {
        return $this->belongsTo('App\Models\MasterBed');
    }

    public function single_beds()
    {
        return $this->belongsTo('App\Models\SingleBed');
    }

    public function closets()
    {
        return $this->belongsTo('App\Models\Closet');
    }

    public function mirrors()
    {
        return $this->belongsTo('App\Models\Mirror');
    }

    public function sofas()
    {
        return $this->belongsTo('App\Models\Sofa');
    }

    public function chairs()
    {
        return $this->belongsTo('App\Models\Chair');
    }

    public function tables()
    {
        return $this->belongsTo('App\Models\Table');
    }

    public function cupboards()
    {
        return $this->belongsTo('App\Models\Cupboard');
    }
    
    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }

    public function master_rooms()
    {
        return $this->belongsTo('App\Models\MasterRoom');
    }

    public function single_rooms()
    {
        return $this->belongsTo('App\Models\SingleRoom');
    }

    public function living_rooms()
    {
        return $this->belongsTo('App\Models\LivingRoom');
    }

    public function dinning_rooms()
    {
        return $this->belongsTo('App\Models\DinningRoom');
    }

    public function kitchens()
    {
        return $this->belongsTo('App\Models\Kitchen');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
