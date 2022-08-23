<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAttributeValueRequest;
use App\Http\Requests\StoreAttributeValueRequest;
use App\Http\Requests\UpdateAttributeValueRequest;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AttributeValueController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('attribute_value_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attributeValues = AttributeValue::with(['attribute'])->get();

        return view('admin.attributeValues.index', compact('attributeValues'));
    }

    public function create()
    {
        abort_if(Gate::denies('attribute_value_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attributes = Attribute::pluck('title_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.attributeValues.create', compact('attributes'));
    }

    public function store(StoreAttributeValueRequest $request)
    {
        $attributeValue = AttributeValue::create($request->all());

        return redirect()->route('admin.attribute-values.index');
    }

    public function edit(AttributeValue $attributeValue)
    {
        abort_if(Gate::denies('attribute_value_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attributes = Attribute::pluck('title_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        $attributeValue->load('attribute');

        return view('admin.attributeValues.edit', compact('attributeValue', 'attributes'));
    }

    public function update(UpdateAttributeValueRequest $request, AttributeValue $attributeValue)
    {
        $attributeValue->update($request->all());

        return redirect()->route('admin.attribute-values.index');
    }

    public function show(AttributeValue $attributeValue)
    {
        abort_if(Gate::denies('attribute_value_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attributeValue->load('attribute', 'attributeValueInventories');

        return view('admin.attributeValues.show', compact('attributeValue'));
    }

    public function destroy(AttributeValue $attributeValue)
    {
        abort_if(Gate::denies('attribute_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attributeValue->delete();

        return back();
    }

    public function massDestroy(MassDestroyAttributeValueRequest $request)
    {
        AttributeValue::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
