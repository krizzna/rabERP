<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cutting extends Model
{
    protected $guarded = [];

    public function cuttingitems()
    {
	return $this->hasMany('App\Cuttingitem');
    }

    public function customer()
    {
	return $this->belongsTo('App\Customer');
    }
}
