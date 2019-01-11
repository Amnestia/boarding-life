<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $with=['review','location_type'];


    public function review()
    {
        return $this->hasMany(Review::class,'location_id','id');
    }

    public function location_type()
    {
        return $this->belongsTo(LocationType::class,'type_id');
    }
}
