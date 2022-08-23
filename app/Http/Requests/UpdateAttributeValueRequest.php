<?php

namespace App\Http\Requests;

use App\Models\AttributeValue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAttributeValueRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('attribute_value_edit');
    }

    public function rules()
    {
        return [
            'value_en' => [
                'string',
                'required',
            ],
            'value_ar' => [
                'string',
                'required',
            ],
            'attribute_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
