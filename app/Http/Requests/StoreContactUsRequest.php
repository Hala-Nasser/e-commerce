<?php

namespace App\Http\Requests;

use App\Models\ContactUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContactUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_us_create');
    }

    public function rules()
    {
        return [
            'email' => [
                'string',
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'subject' => [
                'string',
                'required',
            ],
            'message' => [
                'required',
            ],
        ];
    }
}
