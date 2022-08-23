<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserProductFavoriteRequest;
use App\Models\UserProductFavorite;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserProductFavoriteController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_product_favorite_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userProductFavorites = UserProductFavorite::with(['product', 'user'])->get();

        return view('admin.userProductFavorites.index', compact('userProductFavorites'));
    }

    public function show(UserProductFavorite $userProductFavorite)
    {
        abort_if(Gate::denies('user_product_favorite_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userProductFavorite->load('product', 'user');

        return view('admin.userProductFavorites.show', compact('userProductFavorite'));
    }

    public function destroy(UserProductFavorite $userProductFavorite)
    {
        abort_if(Gate::denies('user_product_favorite_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userProductFavorite->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserProductFavoriteRequest $request)
    {
        UserProductFavorite::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
