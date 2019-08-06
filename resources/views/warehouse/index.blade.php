@extends('_layout')
@section('content')

<div class="warehouse-list">
    <button class="btn_info align-right btn-add-warehous" data-toggle="modal" data-target="#createWarehouseModal" id="add-form">
        <i class="fas fa-layer-plus"></i>
        @lang('Create New')
    </button>
    <div class="table-responsive">
        <table class="table_default">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>@lang('Name')</th>
                    <th class="text-center">@lang('Stock')</th>
                    <th class="text-center">@lang('Location')</th>
                    <th class="text-center">@lang('Default')</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($warehouse as $index => $war)
                <tr>
                    <td class="text-center">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td>{{ $war->warehouse_name }}</td>
                    <td class="text-center">{{ $war->stock }}</td>
                    <td class="text-center">{{ $war->address }}</td>
                    <td class="text-center"><input type="checkbox" {{ $war->is_default ? 'checked' : '' }} disabled></td>
                    <td class="text-right">
                        <a href="javascript:void(0)" data-form="{{ json_encode($war, true) }}" class="edit-warehouse-form text-muted mr-3 edit-form"><i class="far fa-edit text-muted mr-3"></i></a>
                        <a href="javascript:void(0)" data-form="{{ $war->id }}" class="delete-warehouse-row"><i class="fas fa-trash text-danger text-muted"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@section('js')
    <script src="/stock/js/inventory.js"></script>
    @include('warehouse._modal-create')
    @include('warehouse._modal-edit')
@stop