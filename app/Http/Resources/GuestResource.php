<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class GuestResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        //dd($request);
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
            'note' => $this->note,

          /*  'id' => $this->id,
            'userID' => $this->user_id,
            'guestID' => $this->guest_id,
            'park' => $this->park,
            'plot_number' => $this->plot_number,
            'type' => $this->type,
            'key_in' => $this->key_in,
            'key_out' => $this->key_out,*/
        ]);
    }

   
}
