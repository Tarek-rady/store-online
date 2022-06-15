<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeSliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        if($this->method() == 'POST'){
            return [
                'pic' => 'required|mimes:png,jpg,jpeg' ,
                'title' => 'required' ,
                'subtitle' => 'required' ,
                'price' => 'required' ,
                'link' => 'required' ,
                'status' => 'required' ,
            ];
        }else{

            return [
                'pic' => 'nullable|mimes:png,jpg,jpeg' ,
                'title' => 'required' ,
                'subtitle' => 'required' ,
                'price' => 'required' ,
                'link' => 'required' ,
                'status' => 'required' ,
            ];



        }

    }
}
