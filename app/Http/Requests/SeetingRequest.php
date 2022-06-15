<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeetingRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'email' => 'required' ,
            'phone' => 'required' ,
            'phone2' => 'required' ,
            'addres' => 'required' ,
            'map' => 'nullable' ,
            'twiter' => 'required' ,
            'facebook' => 'required' ,
            'pinterest' => 'nullable' ,
            'instagram' => 'required' ,
            'youtube' => 'required' ,
        ];
    }
}
