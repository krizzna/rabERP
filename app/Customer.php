<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function cutting()
    {
	return $this->hasOne('App\Cutting');
    }
}
