@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>标签
                    <small>» 编辑标签</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">标签编辑表单</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')
                        @include('admin.partials.success')

                        <form class="form-horizontal" role="form" method="POST" action="/admin/tag/{{ $id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">标签名</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="name" id="tag"
                                           value="{{ $name }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">在主页显示?</label>
                                <div class="col-md-3">
                                    <label class="radio-inline">
                                        <input name="show_index" id="radio1" value="yes" type="radio"
                                               @if($show_index) checked @endif>
                                        是
                                    </label>
                                    <label class="radio-inline">
                                        <input name="show_index" id="radio2" value="no" type="radio"
                                               @if(!$show_index) checked @endif>
                                        否
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary btn-md">
                                        <i class="glyphicon glyphicon-floppy-disk"></i>
                                        保存修改
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
                    <h4 class="modal-title">删除确认</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        您确认将删除标签吗?
                    </p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="/admin/tag/{{ $id }}">
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
