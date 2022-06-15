<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                'name' => 'required' ,
                'slug' => 'required' ,
                'short_description' => 'required' ,
                'description' => 'nullable' ,
                'price' => 'required|numeric' ,
                'sel_price' => 'nullable' ,
                'SKU' => 'required|numeric' ,
                'stock_status' => 'required' ,
                'quantity' => 'required|numeric' ,
                'catigories' => 'required' ,
            ];

        }else{
            return [
                'pic' => 'nullable' ,
                'name' => 'required' ,
                'slug' => 'required' ,
                'short_description' => 'required' ,
                'description' => 'nullable' ,
                'price' => 'required|numeric' ,
                'sel_price' => 'nullable' ,
                'SKU' => 'required|numeric' ,
                'stock_status' => 'required' ,
                'quantity' => 'required|numeric' ,
                'catigories' => 'required' ,
            ];
        }

    }
}
