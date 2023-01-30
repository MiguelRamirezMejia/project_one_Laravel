<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovementRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'date_movement' => [
                'required'
            ],
            'product_id' => [
                'required'
            ],
            'amount' => [
                'required'
            ],
            'type' => [
                'required'
            ],
           
        ];
    }
}
