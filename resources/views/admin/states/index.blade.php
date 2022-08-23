@extends('layouts.admin')
@section('content')
@can('state_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.states.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.state.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.state.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-State">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.state.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.state.fields.title_en') }}
                        </th>
                        <th>
                            {{ trans('cruds.state.fields.title_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.state.fields.country') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($states as $key => $state)
                        <tr data-entry-id="{{ $state->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $state->id ?? '' }}
                            </td>
                            <td>
                                {{ $state->title_en ?? '' }}
                            </td>
                            <td>
                                {{ $state->title_ar ?? '' }}
                            </td>
                            <td>
                                {{ $state->country->name ?? '' }}
                            </td>
                            <td>
                                @can('state_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.states.show', $state->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('state_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.states.edit', $state->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('state_delete')
                                    <form action="{{ route('admin.states.destroy', $state->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('state_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.states.massDestroy') }}",
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
  let table = $('.datatable-State:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection