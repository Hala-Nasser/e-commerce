@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.userProductFavorite.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.user-product-favorites.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.userProductFavorite.fields.id') }}
                        </th>
                        <td>
                            {{ $userProductFavorite->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userProductFavorite.fields.product') }}
                        </th>
                        <td>
                            {{ $userProductFavorite->product->title_en ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userProductFavorite.fields.user') }}
                        </th>
                        <td>
                            {{ $userProductFavorite->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.user-product-favorites.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection