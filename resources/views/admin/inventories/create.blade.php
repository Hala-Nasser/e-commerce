@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.inventory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.inventories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.inventory.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01" required>
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.inventory.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', '') }}" step="1" required>
                @if($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="discount_percentage">{{ trans('cruds.inventory.fields.discount_percentage') }}</label>
                <input class="form-control {{ $errors->has('discount_percentage') ? 'is-invalid' : '' }}" type="number" name="discount_percentage" id="discount_percentage" value="{{ old('discount_percentage', '') }}" step="0.01">
                @if($errors->has('discount_percentage'))
                    <span class="text-danger">{{ $errors->first('discount_percentage') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.discount_percentage_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="weight">{{ trans('cruds.inventory.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="number" name="weight" id="weight" value="{{ old('weight', '') }}" step="0.01" required>
                @if($errors->has('weight'))
                    <span class="text-danger">{{ $errors->first('weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="product_id">{{ trans('cruds.inventory.fields.product') }}</label>
                <select class="form-control select2 {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id" id="product_id" required>
                    @foreach($products as $id => $entry)
                        <option value="{{ $id }}" {{ old('product_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('product'))
                    <span class="text-danger">{{ $errors->first('product') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="attribute_values">{{ trans('cruds.inventory.fields.attribute_value') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('attribute_values') ? 'is-invalid' : '' }}" name="attribute_values[]" id="attribute_values" multiple required>
                    @foreach($attribute_values as $id => $attribute_value)
                        <option value="{{ $id }}" {{ in_array($id, old('attribute_values', [])) ? 'selected' : '' }}>{{ $attribute_value }}</option>
                    @endforeach
                </select>
                @if($errors->has('attribute_values'))
                    <span class="text-danger">{{ $errors->first('attribute_values') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.attribute_value_helper') }}</span>
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