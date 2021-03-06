<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Cargo extends Model
{
    protected $table = 'cargos';

    public function cargoStatus()
    {
    	return $this->belongsTo('App\Models\CargoStatus','status','id');
    }

    public function sender()
    {
    	return $this->belongsTo('App\Models\Customer','sender_id','id');
    }

    public function receiver()
    {
    	return $this->belongsTo('App\Models\Receiver','receiver_id','id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product','id','cargo_id');
    }

    
}
