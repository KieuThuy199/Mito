@extends('admin.layout.main')

@section('header-body')
    <a href="#" class="breadcrumb-admin">
        <i class="fas fa-tv"></i>
        @lang('modules.dashboard.menu.web')
    </a> &#124;
    @lang('modules.button.edit')

@endsection

@section('content-body')
    <form action="" class="change-form">
        <label for="" class="control-label">@lang('modules.news.name')</label>
        <input class="form-control" required>
        <label for="" class="control-label">@lang('modules.news.summary')</label>
        <input class="form-control" required>
        <label for="" class="control-label">@lang('modules.news.content')</label>
        <textarea class="form-control" name="content-news" id="news-content" cols="30" rows="10" required></textarea>
        <button class="btn-change">@lang('modules.changeinfor.confirm')</button>
        <button class="btn-back">@lang('modules.back')</button>
    </form>
@endsection
