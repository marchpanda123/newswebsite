@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>广告管理
                    <small>» 创建新广告</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">新广告创建表单</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')

                        <form class="form-horizontal" role="form" method="POST" action="/admin/ad/{{$ad->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">广告名称</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="ad_name" id="name"
                                           value="{{$ad->name}}" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ad_url" class="col-md-3 control-label">
                                    广告地址
                                </label>
                                <div class="col-md-6 input-group">
                                    <span class="input-group-addon" id="basic-addon">http://</span>
                                    <input class="form-control" name="ad_url" id="ad_url" aria-describedby="basic-addon"
                                           type="text" value="{{$ad->url}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image_path" class="col-md-3 control-label">
                                    广告图片
                                </label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="image"
                                           id="image" alt="Image thumbnail">
                                    <input type="hidden" class="form-control" name="image_path"
                                           id="page_image" alt="Image thumbnail" value="{{$ad->image_path}}">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{$ad->image_path}}" class="img img_responsive"
                                         id="page-image-preview" style="max-height:40px">
                                </div>
                            </div>
                            <div class="col-md-offset-3">
                                <em>* 我们建议使用 570*90</em>
                            </div>
                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary btn-md">
                                        <i class="glyphicon glyphicon-floppy-disk"></i>
                                        更新
                                    </button>
                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                            data-target="#modal-delete">
                                        <i class="glyphicon glyphicon-remove"></i>
                                        删除
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- comfirm delete --}}
    <div class="modal fade" id="modal-delete" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">请确认</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        您确认删除广告吗？
                    </p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="/admin/ad/{{ $ad->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="glyphicon glyphicon-remove"></i> 是的
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $("#image").change(function () {
            var form_data = new FormData();
            form_data.append("image", $(this).prop('files')[0]);
            var options = {
                url: "{{route('author.pageImage',['_token' => csrf_token()])}}",
                method: "post",
                processData: false, // important
                contentType: false, // important
                data: form_data,
                success: function (response) {
                    if (response.success) {
                        $('#page-image-preview').attr("src", response.file);
                        $('#page_image').val(response.file);
                    } else {
                        $("#validation-errors").append('<em>' + response.errors + '</em>');
                    }
                },
                error: function (response) {

                }
            };
            $.ajax(options);
        });
    </script>
@stop
