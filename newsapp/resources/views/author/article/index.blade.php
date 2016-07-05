@extends('author.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>文章
                    <small>» 文章列表</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/author/article/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 添加文章
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                @include('author.partials.errors')
                @include('author.partials.success')

                <table id="posts-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>文章名</th>
                        <th>文章简介</th>
                        <th>发布时间</th>
                        <th>状态</th>
                        <th data-sortable="false">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->intro }}</td>
                            <td data-order="{{ $article->published_at->timestamp }}">
                                {{ $article->published_at->format('j-M-y H:i') }}
                            </td>
                            <td>
                                @if($article->is_draft)
                                    <i class="glyphicon glyphicon-folder-close"></i>
                                    草稿
                                @elseif($article->is_checked===0)
                                    <i class="glyphicon glyphicon-time"></i>
                                    等待审核
                                @elseif($article->is_checked===1)
                                    <i class="glyphicon glyphicon-ok"></i>
                                    已接受
                                @else
                                    <i class="glyphicon glyphicon-remove"></i>
                                    未接受
                                @endif
                            </td>
                            <td>
                                @if($article->is_checked==1)
                                    <button class="btn btn-xs disabled">
                                        <i class="glyphicon glyphicon-pencil"></i> 编辑
                                    </button>
                                @else
                                    <a href="/author/article/{{ $article->id }}/edit" class="btn btn-xs btn-success">
                                        <i class="glyphicon glyphicon-pencil"></i> 编辑
                                    </a>
                                @endif
                                <a href="/author/article/{{ $article->id }}" class="btn btn-xs btn-warning">
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
            $("#posts-table").DataTable({
                order: [[2, "desc"]]
            });
        });
    </script>
@stop