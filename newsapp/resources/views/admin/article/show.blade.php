@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-10 col-md-10">
                <h3>
                    {{$article->title}}
                </h3>
                <img src="{{$article->page_image}}" class="img img-responsive"
                     id="page-image-preview" style="max-height:100px">
                <ul class="list-inline">
                    @if($article->tags)
                        @foreach($article->tags as $tag)
                            <li>
                                <i class="glyphicon glyphicon-tag"></i>
                                {{$tag->name}}
                            </li>
                        @endforeach
                    @endif
                    <li>
                        <i class="glyphicon glyphicon-time"></i>
                        发布于:
                        {{$article->published_at}}
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-user"></i>
                        {{$article->user->pen_name}}
                    </li>
                </ul>
                <p>状态:
                    @if($article->is_checked===0)
                        <i class="glyphicon glyphicon-time"></i>
                        待审核
                    @elseif($article->is_checked===1)
                        <i class="glyphicon glyphicon-ok"></i>
                        已接受
                    @else
                        <i class="glyphicon glyphicon-remove"></i>
                        已拒绝
                    @endif
                </p>
                <p>简介: {{$article->intro}}</p>
                <p>轮播:
                    @if($article->is_carousel)
                        是
                    @else
                        否
                    @endif
                </p>
            </div>
        </div>
        <hr class="col-lg-10 col-md-10">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                {!! $article->content !!}
            </div>
        </div>
        <div class="col-lg-10 col-md-10">
            <div class="row">
                <form class="form-horizontal" role="form" method="POST"
                      action="{{ route('admin.article.update', $article->id) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="col-md-8">
                        <div class="form-group">
                            @if($article->is_checked===0 || $article->is_checked===2)
                                <button type="submit" class="btn btn-success"
                                        name="action" value="approved">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    接受?
                                </button>
                            @endif
                            @if($article->is_checked===0 || $article->is_checked===1)
                                <button type="submit" class="btn btn-warning"
                                        name="action" value="unapproved">
                                    <i class="glyphicon glyphicon-remove"></i>
                                    拒绝?
                                </button>
                            @endif
                            <button type="submit" class="btn btn-danger"
                                    name="action" value="review">
                                <i class="glyphicon glyphicon-time"></i>
                                待审核?
                            </button>
                            @if($article->is_checked===1)
                                @if($article->is_carousel)
                                    <button type="submit" class="btn btn-info"
                                            name="carousel" value="0">
                                        取消轮播
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-info"
                                            name="carousel" value="1">
                                        设置轮播
                                    </button>
                                @endif
                            @endif
                            @if($article->is_checked===1)
                                @if($article->is_hotevens)
                                    <button type="submit" class="btn btn-success"
                                            name="hoteven" value="0">
                                        取消快讯
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-success"
                                            name="hoteven" value="1">
                                        设置快讯
                                    </button>
                                @endif
                            @endif
                            @if($article->is_checked===1)
                                @if($article->is_hotimgs)
                                    <button type="submit" class="btn btn-primary"
                                            name="hotimg" value="0">
                                        取消最热图文
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-primary"
                                            name="hotimg" value="1">
                                        设置最热图文
                                    </button>
                                @endif
                            @endif
                            @if($article->is_checked===1)
                                @if($article->is_topics)
                                    <button type="submit" class="btn btn-primary"
                                            name="topic" value="0">
                                        取消专题
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-primary"
                                            name="topic" value="1">
                                        设置专题
                                    </button>
                                @endif
                            @endif
                            @if($article->is_checked===1)
                                
                                    <button type="submit" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        排名<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" style=" margin-left: 530px; z-index: 20;
  margin-top:-54px ;min-width:400px; background-color:white; border:none;box-shadow:none;">
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-default" name="rank" value="1">1</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="2">2</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="3">3</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="4">4</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="5">5</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="6">6</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="7">7</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="8">8</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="9">9</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="10">10</button>
                                            <button type="submit" class="btn btn-default" name="rank" value="0">取消</button>
                                        </div>
                                    </ul>
                                
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection