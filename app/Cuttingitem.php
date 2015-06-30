<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuttingitem extends Model
{
    protected $guarded = [];

    public function cutting()
    {
	return $this->belongsTo('App\Cutting');
    }
}
