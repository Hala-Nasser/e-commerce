<?php

namespace App\Http\Requests;

use App\Models\Rate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('rate_edit');
    }

    public function rules()
    {
        return [
            'value' => [
                'numeric',
                'required',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
            'product_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
