<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_create');
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
            'logo' => [
                'required',
            ],
            'description_en' => [
                'required',
            ],
            'keywords_en' => [
                'required',
            ],
            'keywords_ar' => [
                'required',
            ],
            'email' => [
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'website' => [
                'string',
                'required',
            ],
            'description_ar' => [
                'required',
            ],
        ];
    }
}
