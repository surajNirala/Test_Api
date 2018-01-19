<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Key_log extends Model
{
    
    public function guests()
    {
    	return $this->belongsTo('App\Model\Guest','id');
    }
}
