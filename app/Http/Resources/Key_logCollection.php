<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Key_logCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

          return ([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'guest_id' => $this->guest_id,
            'park' => $this->park,
            'plot_number' => $this->plot_number,
            'type' => $this->type,
            'key_in' => $this->key_in,
            'key_out' => $this->key_out,
        ]);
    }
}
