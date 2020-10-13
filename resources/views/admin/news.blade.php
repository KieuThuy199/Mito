@extends('admin.layout.main')
@push('css')

    <link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

@endpush

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
<div class="table-responsive">
    <table class="table table-bordered text-center"  id="data_news">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên tin tức</th>
            <th scope="col">Tóm tắt</th>
            <th scope="col">Nội dung</th>
        </tr>
        </thead>
    </table>
</div>
@endsection

@push('scripts')

    <script type="text/javascript" src="..\js\index.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

@endpush
