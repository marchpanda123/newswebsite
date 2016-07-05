@extends('admin.layout')

@section('content')

    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>用户
                    <small>» 用户列表</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/user/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 添加用户
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="tags-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>用户名/昵称</th>
                        <th>状态</th>
                        <th data-sortable="false">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }} / {{$user->nick_name}}</td>
                            @if($user->is_admin)
                                <td>管理员</td>
                            @else
                                <td>发布者</td>
                            @endif
                            <td>
                                @if($user->is_admin)
                                    <button class="btn btn-xs disabled">
                                        <i class="glyphicon glyphicon-pencil"></i> 编辑
                                    </button>
                                @else
                                    <a href="/admin/user/{{ $user->id }}/edit" class="btn btn-xs btn-info">
                                        <i class="glyphicon glyphicon-pencil"></i> 编辑
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function () {
            $("#tags-table").DataTable({});
        });
    </script>
@stop