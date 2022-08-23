<?php

namespace App\Http\Requests;

use App\Models\Delivery;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDeliveryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('delivery_create');
    }

    public function rules()
    {
        return [
            'price' => [
                'required',
            ],
            'city_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
