@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.product.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <td>
                            {{ $product->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.image') }}
                        </th>
                        <td>
                            @if($product->image)
                                <a href="{{ $product->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $product->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.title_en') }}
                        </th>
                        <td>
                            {{ $product->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $product->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.description_en') }}
                        </th>
                        <td>
                            {!! $product->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $product->description_ar !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.category') }}
                        </th>
                        <td>
                            {{ $product->category->title_en ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.products.index') }}">
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
            <a class="nav-link" href="#product_inventories" role="tab" data-toggle="tab">
                {{ trans('cruds.inventory.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#product_user_product_favorites" role="tab" data-toggle="tab">
                {{ trans('cruds.userProductFavorite.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#product_rates" role="tab" data-toggle="tab">
                {{ trans('cruds.rate.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="product_inventories">
            @includeIf('admin.products.relationships.productInventories', ['inventories' => $product->productInventories])
        </div>
        <div class="tab-pane" role="tabpanel" id="product_user_product_favorites">
            @includeIf('admin.products.relationships.productUserProductFavorites', ['userProductFavorites' => $product->productUserProductFavorites])
        </div>
        <div class="tab-pane" role="tabpanel" id="product_rates">
            @includeIf('admin.products.relationships.productRates', ['rates' => $product->productRates])
        </div>
    </div>
</div>

@endsection