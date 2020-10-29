@extends('admin.layout.main')

@section('header-body')
    <a href="#" class="breadcrumb-admin">
        <i class="far fa-id-card"></i>
        @lang('modules.dashboard.menu.news')
    </a> &#124;
    @lang('modules.button.add')

@endsection

@section('content-body')
    @if(session('status'))
    <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session('status') }}
      </div>
    @endif

    @if(session()->has('fail'))
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('fail') }}
      </div>
    @endif
    <form method="POST" action="http://127.0.0.1:8000/api/news" class="change-form" id="addnews" name="addnews" enctype="multipart/form-data">
        @csrf
        {{-- <div class="image-upload">
            <label for="img-add">
                <img src="img/addimg.png" id="addimg">
            </label>

        </div> --}}

        <input type="file" id="img-add" name="imgnews[]" multiple><br>
        {{-- <script>
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
        </script> --}}
        <label for="" class="control-label">@lang('modules.news.name')</label>
        <input class="form-control" name="title" required>
        <label for="" class="control-label">@lang('modules.news.summary')</label>
        <input class="form-control" name="summary" required>
        <label for="" class="control-label">@lang('modules.news.content')</label>
        <textarea class="form-control" name="content-news" id="news-content" cols="30" rows="10" required></textarea>
        <button class="btn-change">@lang('modules.changeinfor.confirm')</button>
        <button class="btn-back" onclick="window.location.href='/news'">@lang('modules.back')</button>
    </form>
@endsection


