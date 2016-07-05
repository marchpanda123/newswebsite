@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>用户
                    <small>» 编辑用户</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">用户编辑表单</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')
                        @include('admin.partials.success')
                        <dl class="dl-horizontal">
                            <dt>用户名</dt>
                            <dd>{{$user->name}}</dd>

                            <dt>昵称</dt>
                            <dd>{{$user->nickname}}</dd>

                            <dt>创建于</dt>
                            <dd>{{$user->created_at}}</dd>

                            <dt>角色</dt>
                            @if($user->is_admin)
                                <dd>管理者</dd>
                            @else
                                <dd>作者</dd>
                            @endif
                        </dl>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-success"
                                            data-toggle="modal" data-target="#modal-change">
                                        <i class="glyphicon glyphicon-user"></i>
                                        改变角色
                                    </button>
                                    <button type="button" class="btn btn-danger"
                                            data-toggle="modal" data-target="#modal-delete">
                                        <i class="glyphicon glyphicon-remove"></i>
                                        删除
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Comfirm change role--}}
    <div class="modal fade" id="modal-change" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">请确认</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        您确定想要改变用户角色吗?<br>
                        如果改变成管理员，您将不能够再修改!
                    </p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('admin.user.update', $user->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-times-circle"></i> 是的
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Comfirm delete user--}}
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
                        您确认将删除用户吗?
                    </p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('admin.user.destroy', $user->id) }}">
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
@stop
