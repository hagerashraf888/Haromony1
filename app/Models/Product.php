<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function master_beds()
    {
        return $this->hasMany('App\Models\MasterBed');
    }

    public function single_beds()
    {
        return $this->hasMany('App\Models\SingleBed');
    }

    public function closets()
    {
        return $this->hasMany('App\Models\Closet');
    }

    public function mirrors()
    {
        return $this->hasMany('App\Models\Mirror');
    }

    public function sofas()
    {
        return $this->hasMany('App\Models\Sofa');
    }

    public function chairs()
    {
        return $this->hasMany('App\Models\Chair');
    }

    public function tables()
    {
        return $this->hasMany('App\Models\Table');
    }

    public function cupboards()
    {
        return $this->hasMany('App\Models\Cupboard');
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
