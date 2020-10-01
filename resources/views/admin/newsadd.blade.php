@extends('admin.layout.main')

@section('header-body')
    <a href="#" class="breadcrumb-admin">
        <i class="far fa-id-card"></i>
        @lang('modules.dashboard.menu.news')
    </a> &#124;
    @lang('modules.button.add')

@endsection

@section('content-body')
    <form action="" class="change-form">
        <div class="image-upload">
            <label for="img-add">
                <img src="img/addimg.png" id="addimg">
            </label>
            <input type="file" name="file" id="img-add">
        </div>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#addimg').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#img-add").change(function(){
                readURL(this);
            });
        </script>
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


