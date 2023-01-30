<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'name' => [
                'required'
            ],
            'code' => [
                'required'
            ],
            'description' => [
                'required'
            ],
            'value_buy' => [
                'required'
            ],
            'value_sale' => [
                'required'
            ],
            'stock' => [
                'required'
            ],
            
        ];
    }
}
