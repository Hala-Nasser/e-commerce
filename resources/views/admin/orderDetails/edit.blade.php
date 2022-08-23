@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.orderDetail.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.order-details.update", [$orderDetail->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.orderDetail.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', $orderDetail->quantity) }}" step="1" required>
                @if($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.orderDetail.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_price">{{ trans('cruds.orderDetail.fields.total_price') }}</label>
                <input class="form-control {{ $errors->has('total_price') ? 'is-invalid' : '' }}" type="number" name="total_price" id="total_price" value="{{ old('total_price', $orderDetail->total_price) }}" step="0.01" required>
                @if($errors->has('total_price'))
                    <span class="text-danger">{{ $errors->first('total_price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.orderDetail.fields.total_price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_weight">{{ trans('cruds.orderDetail.fields.total_weight') }}</label>
                <input class="form-control {{ $errors->has('total_weight') ? 'is-invalid' : '' }}" type="number" name="total_weight" id="total_weight" value="{{ old('total_weight', $orderDetail->total_weight) }}" step="0.01" required>
                @if($errors->has('total_weight'))
                    <span class="text-danger">{{ $errors->first('total_weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.orderDetail.fields.total_weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="order_id">{{ trans('cruds.orderDetail.fields.order') }}</label>
                <select class="form-control select2 {{ $errors->has('order') ? 'is-invalid' : '' }}" name="order_id" id="order_id" required>
                    @foreach($orders as $id => $entry)
                        <option value="{{ $id }}" {{ (old('order_id') ? old('order_id') : $orderDetail->order->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('order'))
                    <span class="text-danger">{{ $errors->first('order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.orderDetail.fields.order_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="invintory_id">{{ trans('cruds.orderDetail.fields.invintory') }}</label>
                <select class="form-control select2 {{ $errors->has('invintory') ? 'is-invalid' : '' }}" name="invintory_id" id="invintory_id" required>
                    @foreach($invintories as $id => $entry)
                        <option value="{{ $id }}" {{ (old('invintory_id') ? old('invintory_id') : $orderDetail->invintory->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('invintory'))
                    <span class="text-danger">{{ $errors->first('invintory') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.orderDetail.fields.invintory_helper') }}</span>
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