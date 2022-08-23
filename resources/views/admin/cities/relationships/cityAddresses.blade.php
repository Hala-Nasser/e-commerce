<div class="m-3">

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.address.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-cityAddresses">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.address.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.address.fields.street') }}
                            </th>
                            <th>
                                {{ trans('cruds.address.fields.landmark') }}
                            </th>
                            <th>
                                {{ trans('cruds.address.fields.phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.address.fields.city') }}
                            </th>
                            <th>
                                {{ trans('cruds.address.fields.delivary') }}
                            </th>
                            <th>
                                {{ trans('cruds.address.fields.user') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($addresses as $key => $address)
                            <tr data-entry-id="{{ $address->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $address->id ?? '' }}
                                </td>
                                <td>
                                    {{ $address->street ?? '' }}
                                </td>
                                <td>
                                    {{ $address->landmark ?? '' }}
                                </td>
                                <td>
                                    {{ $address->phone ?? '' }}
                                </td>
                                <td>
                                    {{ $address->city->title_en ?? '' }}
                                </td>
                                <td>
                                    {{ $address->delivary->price ?? '' }}
                                </td>
                                <td>
                                    {{ $address->user->name ?? '' }}
                                </td>
                                <td>
                                    @can('address_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.addresses.show', $address->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan


                                    @can('address_delete')
                                        <form action="{{ route('admin.addresses.destroy', $address->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('address_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.addresses.massDestroy') }}",
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
  let table = $('.datatable-cityAddresses:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection