<?php

namespace App\Http\Requests;

use App\Models\Inventory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInventoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inventory_create');
    }

    public function rules()
    {
        return [
            'price' => [
                'required',
            ],
            'quantity' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'discount_percentage' => [
                'numeric',
            ],
            'weight' => [
                'numeric',
                'required',
            ],
            'product_id' => [
                'required',
                'integer',
            ],
            'attribute_values.*' => [
                'integer',
            ],
            'attribute_values' => [
                'required',
                'array',
            ],
        ];
    }
}
