@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>文章
                    <small>» 文章列表</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="posts-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>文章名</th>
                        <th>专栏</th>
                        <th>专题</th>
                        <th>快讯</th>
                        <th>最热图文</th>
                        <th>排名</th>
                        <th>轮播</th>
                        <th>发布时间</th>
                        <th>状态</th>
                        <th data-sortable="false">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>
                                @if($article->is_columns)
                                    是
                                @endif
                            </td>
                            <td>
                                @if($article->is_topics)
                                    是
                                @endif
                            </td>
                            <td>
                                @if($article->is_hotevens)
                                    是
                                @endif
                            </td>
                            <td>
                                @if($article->is_hotimgs)
                                    是
                                @endif
                            </td>
                            <td>
                                @if($article->is_ranks)
                                    {{$article->is_ranks}}
                                @endif
                            </td>
                            <td>
                                @if($article->is_carousel)
                                    是
                                @endif
                            </td>
                            <td data-order="{{ $article->published_at->timestamp }}">
                                {{ $article->published_at->format('j-M-y H:i') }}
                            </td>
                            <td>
                                @if($article->is_checked===0)
                                    <i class="glyphicon glyphicon-time"></i>
                                    待审核
                                @elseif($article->is_checked===1)
                                    <i class="glyphicon glyphicon-ok"></i>
                                    已批准
                                @else
                                    <i class="glyphicon glyphicon-remove"></i>
                                    已拒绝
                                @endif
                            </td>
                            <td>
                                <a href="/admin/article/{{ $article->id }}" class="btn btn-xs btn-success">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    显示
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
                order: [[7, "desc"]]
            });
        });
    </script>
@stop