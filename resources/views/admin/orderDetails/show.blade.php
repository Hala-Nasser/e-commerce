@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.orderDetail.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.order-details.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.orderDetail.fields.id') }}
                        </th>
                        <td>
                            {{ $orderDetail->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderDetail.fields.quantity') }}
                        </th>
                        <td>
                            {{ $orderDetail->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderDetail.fields.total_price') }}
                        </th>
                        <td>
                            {{ $orderDetail->total_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderDetail.fields.total_weight') }}
                        </th>
                        <td>
                            {{ $orderDetail->total_weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderDetail.fields.order') }}
                        </th>
                        <td>
                            {{ $orderDetail->order->total_order_weight ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderDetail.fields.invintory') }}
                        </th>
                        <td>
                            {{ $orderDetail->invintory->price ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.order-details.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection