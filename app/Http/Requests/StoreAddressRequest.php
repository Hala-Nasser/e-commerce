<?php

namespace App\Http\Requests;

use App\Models\Address;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAddressRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('address_create');
    }

    public function rules()
    {
        return [
            'street' => [
                'string',
                'required',
            ],
            'landmark' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'city_id' => [
                'required',
                'integer',
            ],
            'delivary_id' => [
                'required',
                'integer',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
