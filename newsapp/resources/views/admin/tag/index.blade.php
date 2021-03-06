@extends('admin.layout')

@section('content')

    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>标签
                    <small>» 标签列表</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/label/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 创建大标签
                </a>
                <a href="/admin/tag/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 创建小标签
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
                        <th data-sortable="false">标签名</th>
                        <th data-sortable="false">主页显示</th>
                        <th data-sortable="false">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($labels as $label)
                            <tr>
                                <td>{{ $label->name }}</td>
                                <td></td>
                                <td>
                                    <a href="/admin/label/{{ $label->id }}/edit" class="btn btn-xs btn-info">
                                        <i class="glyphicon glyphicon-pencil"></i> 编辑
                                    </a>
                                </td>
                            </tr>
                            @foreach ($label->tags as $tag)
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $tag->name }}</td>
                                    <td>{{$tag->show_index == true ? '是' : ''}}</td>
                                    <td>
                                        <a href="/admin/tag/{{ $tag->id }}/edit" class="btn btn-xs btn-info">
                                            <i class="glyphicon glyphicon-pencil"></i> 编辑
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>未分类的小标签</th>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->name }}</td>
                                <td>{{$tag->show_index == true ? '是' : ''}}</td>
                                <td>
                                    <a href="/admin/tag/{{ $tag->id }}/edit" class="btn btn-xs btn-info">
                                        <i class="glyphicon glyphicon-pencil"></i> 编辑
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
            $("#tags-table").DataTable({
                "ordering" : false,
                "paging": false
            });
        });
    </script>
@stop