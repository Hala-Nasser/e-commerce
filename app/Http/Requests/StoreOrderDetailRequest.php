<?php

namespace App\Http\Requests;

use App\Models\OrderDetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrderDetailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_detail_create');
    }

    public function rules()
    {
        return [
            'quantity' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'total_price' => [
                'required',
            ],
            'total_weight' => [
                'numeric',
                'required',
            ],
            'order_id' => [
                'required',
                'integer',
            ],
            'invintory_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
