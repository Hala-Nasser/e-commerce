<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderDetailRequest;
use App\Models\OrderDetail;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderDetailsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('order_detail_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderDetails = OrderDetail::with(['order', 'invintory'])->get();

        return view('admin.orderDetails.index', compact('orderDetails'));
    }

    public function show(OrderDetail $orderDetail)
    {
        abort_if(Gate::denies('order_detail_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderDetail->load('order', 'invintory');

        return view('admin.orderDetails.show', compact('orderDetail'));
    }

    public function destroy(OrderDetail $orderDetail)
    {
        abort_if(Gate::denies('order_detail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderDetail->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderDetailRequest $request)
    {
        OrderDetail::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
