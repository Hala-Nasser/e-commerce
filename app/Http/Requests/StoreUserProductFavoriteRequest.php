<?php

namespace App\Http\Requests;

use App\Models\UserProductFavorite;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserProductFavoriteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_product_favorite_create');
    }

    public function rules()
    {
        return [
            'product_id' => [
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
