@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>标签
                    <small>» 创建新标签</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">新标签表单</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')

                        <form class="form-horizontal" role="form" method="POST" action="/admin/tag">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">标签名</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="name" id="tag"
                                           value="{{ $name }}" autofocus required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">在主页显示?</label>
                                <div class="col-md-3">
                                    <label class="radio-inline">
                                        <input name="show_index" id="radio1" value="yes" type="radio">
                                        是
                                    </label>
                                    <label class="radio-inline">
                                        <input name="show_index" id="radio2" value="no" checked="checked" type="radio">
                                        否
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary btn-md">
                                        <i class="glyphicon glyphicon-floppy-disk"></i>
                                        创建标签
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop