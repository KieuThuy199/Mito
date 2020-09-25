@extends('admin.layout.main')

@section('header-body')
    <div class="row" style="margin: 0;">
        <div class="breadcrumb-admin">
            <i class="far fa-newspaper"></i>
            @lang('modules.dashboard.menu.news')
        </div>
        <div class="btn-group-sm btn-func">
            <button type="button" class="btn btn-dark">
                <i class="fas fa-sync-alt"></i>
            </button>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-plus"></i>
            </button>
            <button type="button" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
    </div>
@endsection

@section('content-body')

@endsection
