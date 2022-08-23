<div class="m-3">

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.userProductFavorite.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-productUserProductFavorites">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.userProductFavorite.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.userProductFavorite.fields.product') }}
                            </th>
                            <th>
                                {{ trans('cruds.userProductFavorite.fields.user') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userProductFavorites as $key => $userProductFavorite)
                            <tr data-entry-id="{{ $userProductFavorite->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $userProductFavorite->id ?? '' }}
                                </td>
                                <td>
                                    {{ $userProductFavorite->product->title_en ?? '' }}
                                </td>
                                <td>
                                    {{ $userProductFavorite->user->name ?? '' }}
                                </td>
                                <td>
                                    @can('user_product_favorite_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.user-product-favorites.show', $userProductFavorite->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan


                                    @can('user_product_favorite_delete')
                                        <form action="{{ route('admin.user-product-favorites.destroy', $userProductFavorite->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('user_product_favorite_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.user-product-favorites.massDestroy') }}",
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
  let table = $('.datatable-productUserProductFavorites:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection