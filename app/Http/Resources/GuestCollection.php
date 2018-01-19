<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class GuestCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      
        return ([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'lead_name' => $this->lead_name,
            'address' => $this->address,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'arrival' => $this->arrival,
            'departure' => $this->departure,
            'children' => $this->children,
            'adult' => $this->adult,
            'car_registration' => $this->car_registration,
            'note' => $this->note
        ]); 

    }
}
