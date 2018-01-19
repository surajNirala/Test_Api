<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Key_logRequest extends FormRequest
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
            'park'         => 'required',
            'plot_number'  => 'required',
            'type'         => 'required',
            'key_in'       => 'required',
            'key_out'      => 'required'
        ];
    }
}
