@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.orderDetail.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-OrderDetail">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.orderDetail.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderDetail.fields.quantity') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderDetail.fields.total_price') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderDetail.fields.total_weight') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderDetail.fields.order') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderDetail.fields.invintory') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderDetails as $key => $orderDetail)
                        <tr data-entry-id="{{ $orderDetail->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $orderDetail->id ?? '' }}
                            </td>
                            <td>
                                {{ $orderDetail->quantity ?? '' }}
                            </td>
                            <td>
                                {{ $orderDetail->total_price ?? '' }}
                            </td>
                            <td>
                                {{ $orderDetail->total_weight ?? '' }}
                            </td>
                            <td>
                                {{ $orderDetail->order->total_order_weight ?? '' }}
                            </td>
                            <td>
                                {{ $orderDetail->invintory->price ?? '' }}
                            </td>
                            <td>
                                @can('order_detail_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.order-details.show', $orderDetail->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan


                                @can('order_detail_delete')
                                    <form action="{{ route('admin.order-details.destroy', $orderDetail->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('order_detail_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.order-details.massDestroy') }}",
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
  let table = $('.datatable-OrderDetail:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection