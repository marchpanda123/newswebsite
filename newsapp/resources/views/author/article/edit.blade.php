@extends('author.layout')

@section('styles')
    <link href="/assets/pickadate/themes/default.css" rel="stylesheet">
    <link href="/assets/pickadate/themes/default.date.css" rel="stylesheet">
    <link href="/assets/pickadate/themes/default.time.css" rel="stylesheet">
    <link href="/assets/selectize/css/selectize.css" rel="stylesheet">
    <link href="/assets/selectize/css/selectize.bootstrap3.css" rel="stylesheet">
@stop

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>文章
                    <small>» 编辑文章</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">编辑表单</h3>
                    </div>
                    <div class="panel-body">

                        @include('author.partials.errors')
                        @include('author.partials.success')

                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('author.article.update', $article->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="title" class="col-md-2 control-label">
                                            文章名
                                        </label>

                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" autofocus id="title"
                                                   value="{{$article->title}}" maxlength="20">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-md-2 control-label">
                                            文章简介
                                        </label>

                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="intro" id="intro"
                                                   value="{{$article->intro}}" maxlength="30">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="page_image" class="col-md-2 control-label">
                                            主页图片
                                        </label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="file" class="form-control" name="image"
                                                           id="image" alt="Image thumbnail">
                                                    <input type="hidden" class="form-control" name="page_image"
                                                           id="page_image" alt="Image thumbnail"
                                                           value="{{$article->page_image}}">
                                                </div>
                                                <div class="col-md-6 col-sm-6 text-right">
                                                    <img src="{{$article->page_image}}" class="img img_responsive"
                                                         id="page-image-preview" style="max-height:40px">
                                                </div>
                                                <div class="col-md-6 col-sm-6" id="validation-errors">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="content" class="col-md-2 control-label">
                                            内容
                                        </label>

                                        <div class="col-md-10">
                                            <textarea class="form-control" name="content" rows="14"
                                                      id="content">{!! $article->content !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="publish_date" class="col-md-3 control-label">
                                            发布日期
                                        </label>

                                        <div class="col-md-8">
                                            <input class="form-control" name="publish_date" id="publish_date"
                                                   type="text"
                                                   value="{{ $article->publish_date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="publish_time" class="col-md-3 control-label">
                                            发布时间
                                        </label>

                                        <div class="col-md-8">
                                            <input class="form-control" name="publish_time" id="publish_time"
                                                   type="text"
                                                   value="{{ $article->publish_time }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"
                                                           name="is_draft" {{$article->is_draft? 'checked':''}}>
                                                    草稿?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags" class="col-md-3 control-label">
                                            标签
                                        </label>

                                        <div class="col-md-8">
                                            <select name="tags[]" id="tags" class="form-control" multiple>
                                                @foreach ($allTags as $name=>$id)
                                                    <option @if (in_array($id, $tags)) selected
                                                            @endif
                                                            value="{{ $id }}">
                                                        {{ $name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary"
                                                name="action" value="continue">
                                            <i class="glyphicon glyphicon-floppy-disk"></i>
                                            保存 - 继续
                                        </button>
                                        <button type="submit" class="btn btn-success"
                                                name="action" value="finished">
                                            <i class="glyphicon glyphicon-floppy-disk"></i>
                                            保存 - 结束
                                        </button>
                                        <button type="button" class="btn btn-danger"
                                                data-toggle="modal" data-target="#modal-delete">
                                            <i class="glyphicon glyphicon-remove"></i>
                                            删除
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Confirm Delete --}}
        <div class="modal fade" id="modal-delete" tabIndex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                        </button>
                        <h4 class="modal-title">请确认</h4>
                    </div>
                    <div class="modal-body">
                        <p class="lead">
                            <i class="fa fa-question-circle fa-lg"></i>
                            您确定将删除文章吗?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <form method="POST" action="{{ route('author.article.destroy', $article->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">关闭
                            </button>
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-times-circle"></i> 是的
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="/assets/pickadate/picker.js"></script>
    <script src="/assets/pickadate/picker.date.js"></script>
    <script src="/assets/pickadate/picker.time.js"></script>
    <script src="/assets/selectize/selectize.min.js"></script>
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/ckeditor/config.js"></script>
    <script>
        $(function () {
            $("#publish_date").pickadate({
                min: new Date(),
                format: "mmm-d-yyyy"
            });
            $("#publish_time").pickatime({
                format: 'HH:i',
                formatLabel: 'HH:i'
            });
            $("#tags").selectize({
                placeholder: "添加标签"
            });
        });
        CKEDITOR.replace('content');
        CKEDITOR.config.filebrowserImageUploadUrl = "{{route('author.upload',['_token' => csrf_token() ])}}";
        // add class img-responsive
        CKEDITOR.on('dialogDefinition', function (ev) {
            var dialogName = ev.data.name;
            var dialogDefinition = ev.data.definition;
            if (dialogName == 'image2') {
                var dialog = dialogDefinition.dialog;
                dialog.on('ok', function () {
                    var image = this.widget.parts.image;
                    image.addClass('img-responsive');
                });
            }
        });

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