<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function towns()
    {
    	return $this->hasMany('App\Models\Town','state_id');
    }
}
