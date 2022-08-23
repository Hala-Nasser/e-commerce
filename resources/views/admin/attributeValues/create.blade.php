@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.attributeValue.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.attribute-values.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="value_en">{{ trans('cruds.attributeValue.fields.value_en') }}</label>
                <input class="form-control {{ $errors->has('value_en') ? 'is-invalid' : '' }}" type="text" name="value_en" id="value_en" value="{{ old('value_en', '') }}" required>
                @if($errors->has('value_en'))
                    <span class="text-danger">{{ $errors->first('value_en') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.attributeValue.fields.value_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="value_ar">{{ trans('cruds.attributeValue.fields.value_ar') }}</label>
                <input class="form-control {{ $errors->has('value_ar') ? 'is-invalid' : '' }}" type="text" name="value_ar" id="value_ar" value="{{ old('value_ar', '') }}" required>
                @if($errors->has('value_ar'))
                    <span class="text-danger">{{ $errors->first('value_ar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.attributeValue.fields.value_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="attribute_id">{{ trans('cruds.attributeValue.fields.attribute') }}</label>
                <select class="form-control select2 {{ $errors->has('attribute') ? 'is-invalid' : '' }}" name="attribute_id" id="attribute_id" required>
                    @foreach($attributes as $id => $entry)
                        <option value="{{ $id }}" {{ old('attribute_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('attribute'))
                    <span class="text-danger">{{ $errors->first('attribute') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.attributeValue.fields.attribute_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection