<?php

namespace App\Http\Requests;

use App\Models\State;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('state_create');
    }

    public function rules()
    {
        return [
            'title_en' => [
                'string',
                'required',
            ],
            'title_ar' => [
                'string',
                'required',
            ],
            'country_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
