@extends('admin.layout.main')

@section('header-body')
    <a href="#" class="breadcrumb-admin">
        <i class="far fa-id-card"></i>
        @lang('modules.admin.profile')
    </a> &#124;
    @lang('modules.admin.changeinfor')

@endsection

@section('content-body')
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 avatar">
        <img src="img/avatar_admin.png">
        <label>@lang('modules.admin.avatar')</label>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-12">
        <form action="" class="change-form">
            <label for="" class="control-label"><i class="fas fa-user"></i>@lang('modules.changeinfor.name')</label>
            <input class="form-control" required>
            <label for="" class="control-label"><i class="fas fa-envelope"></i>@lang('modules.changeinfor.mail')</label>
            <input class="form-control" required>
            <label for="" class="control-label"><i class="fas fa-phone"></i>@lang('modules.changeinfor.phone')</label>
            <input class="form-control" required>
            <label for="" class="control-label"><i class="far fa-calendar-alt"></i>@lang('modules.changeinfor.birth')</label>
            <input class="form-control" required>
            <label for="" class="control-label"><i class="fas fa-male"></i>@lang('modules.changeinfor.sex')</label>
            <input class="form-control" required>
            <button class="btn-change">@lang('modules.changeinfor.confirm')</button>
            <button class="btn-back">@lang('modules.back')</button>
        </form>
    </div>
</div>

@endsection
