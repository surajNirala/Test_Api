<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
	 protected $fillable = [

		'user_id','name','lead_name','address','telephone','email','arrival','departure','
		children','adult','car_registration','note'
    ];

	public $timestamps = true;

    public function key_logs()
    {
    	return $this->hasMany('App\Model\Key_log');
    }
}
