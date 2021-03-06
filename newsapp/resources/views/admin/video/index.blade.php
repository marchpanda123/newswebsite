@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>视频
                    <small>» 视频列表</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/video/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 添加视频
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
                        <th>视频名</th>
                        <th>视频地址</th>
                        <th>发布时间</th>
                        <th data-sortable="false">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->name }}</td>
                            <td>{{ $video->url }}</td>
                            <td>{{ $video->created_at }}</td>
                            <td>
                                <a href="/admin/video/{{ $video->id }}/edit" class="btn btn-xs btn-info">
                                    <i class="glyphicon glyphicon-pencil"></i> 编辑
                                </a>
                                <a href="/admin/video/{{ $video->id }}" class="btn btn-xs btn-success">
                                    <i class="glyphicon glyphicon-eye-open"></i> 显示
                                </a>
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