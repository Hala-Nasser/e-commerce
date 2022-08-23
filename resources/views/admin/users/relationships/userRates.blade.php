<div class="m-3">

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.rate.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-userRates">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.rate.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.rate.fields.value') }}
                            </th>
                            <th>
                                {{ trans('cruds.rate.fields.user') }}
                            </th>
                            <th>
                                {{ trans('cruds.rate.fields.product') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rates as $key => $rate)
                            <tr data-entry-id="{{ $rate->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $rate->id ?? '' }}
                                </td>
                                <td>
                                    {{ $rate->value ?? '' }}
                                </td>
                                <td>
                                    {{ $rate->user->name ?? '' }}
                                </td>
                                <td>
                                    {{ $rate->product->title_en ?? '' }}
                                </td>
                                <td>
                                    @can('rate_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.rates.show', $rate->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan


                                    @can('rate_delete')
                                        <form action="{{ route('admin.rates.destroy', $rate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('rate_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.rates.massDestroy') }}",
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
  let table = $('.datatable-userRates:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection