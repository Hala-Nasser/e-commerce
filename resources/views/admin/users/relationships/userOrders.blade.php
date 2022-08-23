<div class="m-3">

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.order.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-userOrders">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.order.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.total_order_weight') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.total_price') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.delivery_date') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.delivery_time') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.with_delivery') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.user') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.address') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.status') }}
                            </th>
                            <th>
                                {{ trans('cruds.order.fields.payment') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $key => $order)
                            <tr data-entry-id="{{ $order->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $order->id ?? '' }}
                                </td>
                                <td>
                                    {{ $order->total_order_weight ?? '' }}
                                </td>
                                <td>
                                    {{ $order->total_price ?? '' }}
                                </td>
                                <td>
                                    {{ $order->delivery_date ?? '' }}
                                </td>
                                <td>
                                    {{ $order->delivery_time ?? '' }}
                                </td>
                                <td>
                                    {{ App\Models\Order::WITH_DELIVERY_RADIO[$order->with_delivery] ?? '' }}
                                </td>
                                <td>
                                    {{ $order->user->name ?? '' }}
                                </td>
                                <td>
                                    {{ $order->address->street ?? '' }}
                                </td>
                                <td>
                                    {{ $order->status->title_en ?? '' }}
                                </td>
                                <td>
                                    {{ $order->payment->title_en ?? '' }}
                                </td>
                                <td>
                                    @can('order_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.orders.show', $order->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan


                                    @can('order_delete')
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('order_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.orders.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-userOrders:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection