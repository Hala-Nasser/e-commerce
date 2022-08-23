@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.city.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.city.fields.id') }}
                        </th>
                        <td>
                            {{ $city->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.city.fields.title_en') }}
                        </th>
                        <td>
                            {{ $city->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.city.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $city->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.city.fields.state') }}
                        </th>
                        <td>
                            {{ $city->state->title_en ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cities.index') }}">
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
            <a class="nav-link" href="#city_deliveries" role="tab" data-toggle="tab">
                {{ trans('cruds.delivery.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#city_addresses" role="tab" data-toggle="tab">
                {{ trans('cruds.address.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="city_deliveries">
            @includeIf('admin.cities.relationships.cityDeliveries', ['deliveries' => $city->cityDeliveries])
        </div>
        <div class="tab-pane" role="tabpanel" id="city_addresses">
            @includeIf('admin.cities.relationships.cityAddresses', ['addresses' => $city->cityAddresses])
        </div>
    </div>
</div>

@endsection