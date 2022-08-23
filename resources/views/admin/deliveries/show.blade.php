@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.delivery.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.deliveries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.delivery.fields.id') }}
                        </th>
                        <td>
                            {{ $delivery->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delivery.fields.price') }}
                        </th>
                        <td>
                            {{ $delivery->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delivery.fields.city') }}
                        </th>
                        <td>
                            {{ $delivery->city->title_en ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.deliveries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#delivary_addresses" role="tab" data-toggle="tab">
                {{ trans('cruds.address.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="delivary_addresses">
            @includeIf('admin.deliveries.relationships.delivaryAddresses', ['addresses' => $delivery->delivaryAddresses])
        </div>
    </div>
</div>

@endsection