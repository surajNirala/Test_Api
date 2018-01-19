<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Model\Guest;

class GuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'             => 'required',
            'lead_name'        => 'required',
            'address'          => 'required',
            'telephone'        => 'required',
            'email'            => 'Required|unique:guests|max:255',
            'arrival'          => 'required',
            'departure'        => 'required',
            'children'         => 'required',
            'adult'            => 'required',
            'car_registration' => 'required',
            'note'             => 'required', 
        ];
    }
}
