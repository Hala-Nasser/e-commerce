<?php

namespace App\Http\Requests;

use App\Models\SocialLink;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySocialLinkRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('social_link_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:social_links,id',
        ];
    }
}
