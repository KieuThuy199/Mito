@extends('admin.layout.main')

@section('header-body')
    <div class="breadcrumb-admin">
        <i class="far fa-id-card"></i>
        @lang('modules.admin.profile')
    </div>
@endsection

@section('content-body')
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 avatar">
            <img src="img/avatar_admin.png">
            <label>@lang('modules.admin.avatar')</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-12 profile-infor">
            <h5>Admin</h5>
            <h6>@lang('modules.dashboard.menu.admin.type') : <i>Administrator</i></h6>
            <br>
            <a href="#" id="changepass">@lang('modules.admin.changepass')</a><br>
            <a href="#" id="changeinfor">@lang('modules.admin.changeinfor')</a>
            <br><br>
            <p><i class="far fa-calendar-alt"></i></i>@lang('modules.admin.birth'):</p>
            <p><i class="fas fa-male"></i>@lang('modules.admin.sex'):</p>
            <p><i class="fas fa-envelope"></i>@lang('modules.admin.mail'):</p>
            <p><i class="fas fa-phone"></i>@lang('modules.admin.phone'):</p>
        </div>
    </div>
@endsection
