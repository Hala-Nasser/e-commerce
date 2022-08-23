<?php

namespace App\Http\Requests;

use App\Models\Order;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_edit');
    }

    public function rules()
    {
        return [
            'total_order_weight' => [
                'numeric',
                'required',
            ],
            'total_price' => [
                'required',
            ],
            'delivery_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'delivery_time' => [
                'required',
                'date_format:' . config('panel.time_format'),
            ],
            'with_delivery' => [
                'required',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
            'address_id' => [
                'required',
                'integer',
            ],
            'status_id' => [
                'required',
                'integer',
            ],
            'payment_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
