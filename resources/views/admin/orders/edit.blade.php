@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.orders.update", [$order->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="total_order_weight">{{ trans('cruds.order.fields.total_order_weight') }}</label>
                <input class="form-control {{ $errors->has('total_order_weight') ? 'is-invalid' : '' }}" type="number" name="total_order_weight" id="total_order_weight" value="{{ old('total_order_weight', $order->total_order_weight) }}" step="0.01" required>
                @if($errors->has('total_order_weight'))
                    <span class="text-danger">{{ $errors->first('total_order_weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.total_order_weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_price">{{ trans('cruds.order.fields.total_price') }}</label>
                <input class="form-control {{ $errors->has('total_price') ? 'is-invalid' : '' }}" type="number" name="total_price" id="total_price" value="{{ old('total_price', $order->total_price) }}" step="0.01" required>
                @if($errors->has('total_price'))
                    <span class="text-danger">{{ $errors->first('total_price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.total_price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="delivery_date">{{ trans('cruds.order.fields.delivery_date') }}</label>
                <input class="form-control date {{ $errors->has('delivery_date') ? 'is-invalid' : '' }}" type="text" name="delivery_date" id="delivery_date" value="{{ old('delivery_date', $order->delivery_date) }}" required>
                @if($errors->has('delivery_date'))
                    <span class="text-danger">{{ $errors->first('delivery_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.delivery_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="delivery_time">{{ trans('cruds.order.fields.delivery_time') }}</label>
                <input class="form-control timepicker {{ $errors->has('delivery_time') ? 'is-invalid' : '' }}" type="text" name="delivery_time" id="delivery_time" value="{{ old('delivery_time', $order->delivery_time) }}" required>
                @if($errors->has('delivery_time'))
                    <span class="text-danger">{{ $errors->first('delivery_time') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.delivery_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.order.fields.with_delivery') }}</label>
                @foreach(App\Models\Order::WITH_DELIVERY_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('with_delivery') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="with_delivery_{{ $key }}" name="with_delivery" value="{{ $key }}" {{ old('with_delivery', $order->with_delivery) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="with_delivery_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('with_delivery'))
                    <span class="text-danger">{{ $errors->first('with_delivery') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.with_delivery_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.order.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $order->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address_id">{{ trans('cruds.order.fields.address') }}</label>
                <select class="form-control select2 {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address_id" id="address_id" required>
                    @foreach($addresses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('address_id') ? old('address_id') : $order->address->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status_id">{{ trans('cruds.order.fields.status') }}</label>
                <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id" required>
                    @foreach($statuses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('status_id') ? old('status_id') : $order->status->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payment_id">{{ trans('cruds.order.fields.payment') }}</label>
                <select class="form-control select2 {{ $errors->has('payment') ? 'is-invalid' : '' }}" name="payment_id" id="payment_id" required>
                    @foreach($payments as $id => $entry)
                        <option value="{{ $id }}" {{ (old('payment_id') ? old('payment_id') : $order->payment->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment'))
                    <span class="text-danger">{{ $errors->first('payment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.payment_helper') }}</span>
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