@extends('front.template')
@section('content')
<!-- nav -->
<ol class="breadcrumb">
  <li><a href="/">主页</a></li>
  <li><a href="#">文章</a></li>
  <li class="active">{{$article->title}}</li>
</ol>
<!-- content -->
    <div class="news-content">
        <div class="row">

            <article class="article-body col-sm-8">
                <h1>{{$article->title}}</h1>
                <div class="article-info">
                    <ul class="list-inline">
                        <li class="article-author">{{$article->user->nickname}}</li>
                        <li>{{$article->publish_date}}</li>
                        <li>{{$article->publish_time}}</li>
                    </ul>
                    <p>{{$article->intro}}</p>
                </div>
                <div>
                    {!! $article->content !!}
                </div>
            </article>

            <div class="col-sm-4 article-right hidden-xs">
                <div class="article-container">
                    <div class="article-popular">
                        <a>最新热点></a>
                        <ul class="article-list-content">
                            <li class="article-list">
                                <img src="http://www.aererstein.fr/wp-content/uploads/2013/08/news.jpg" class="img-responsive article-img">
                                <a class="article-content">这里加上最新热点的内容</a>
                            </li>
                            <li>
                                <img src="http://www.aererstein.fr/wp-content/uploads/2013/08/news.jpg"class="img-responsive article-img" >
                                <a class="article-content">这里加上最新热点的内容</a>
                            </li>
                            <li>
                                <img src="http://www.aererstein.fr/wp-content/uploads/2013/08/news.jpg"class="img-responsive article-img">
                                <a class="article-content">这里加上最新热点的内容</a>
                            </li>
                            <li>
                                <img src="http://www.aererstein.fr/wp-content/uploads/2013/08/news.jpg"class="img-responsive article-img">
                                <a class="article-content">这里加上最新热点的内容</a>
                            </li>
                            <li>
                                <img src="http://www.aererstein.fr/wp-content/uploads/2013/08/news.jpg"class="img-responsive article-img">
                                <a class="article-content">这里加上最新热点的内容</a>
                            </li>
                            <li>
                                <img src="http://www.aererstein.fr/wp-content/uploads/2013/08/news.jpg"class="img-responsive article-img">
                                <a class="article-content">这里加上最新热点的内容</a>
                            </li>
                            <li>
                                <img src="http://www.aererstein.fr/wp-content/uploads/2013/08/news.jpg" class="img-responsive article-img">
                                <a class="article-content">这里加上最新热点的内容</a>
                            </li>
                        </ul>
                    </div>
                    <div class="article-popular-pic">
                        <a>热点图片></a>
                        <ul class="article-list-content">
                            <li>
                                <img src="http://www.mediaweek.com.au/content/uploads/2016/03/6277209256_198cdbea86_o.jpg" class="img-responsive article-pic-img">
                                <a>最新热点图片内容</a>
                            </li>
                            <li>
                                <img src="http://www.mediaweek.com.au/content/uploads/2016/03/6277209256_198cdbea86_o.jpg" class="img-responsive article-pic-img">
                                <a>最新热点图片内容</a>
                            </li>
                        </ul>
                    </div>
                    <div class="article-popular-rank">
                        <a>一周热点排行></a>
                        <div class="article-rank">
                        <ul class="article-rank-list">
                            <li><span id="article-active">1</span><a>一周热点排行内容</a></li>
                            <li><span id="article-active">2</span><a>一周热点排行内容</a></li>
                            <li><span id="article-active">3</span><a>一周热点排行内容</a></li>
                            <li><span>4</span><a>一周热点排行内容</a></li>
                            <li><span>5</span><a>一周热点排行内容</a></li>
                            <li><span>6</span><a>一周热点排行内容</a></li>
                            <li><span>7</span><a>一周热点排行内容</a></li>
                            <li><span>8</span><a>一周热点排行内容</a></li>
                            <li><span>9</span><a>一周热点排行内容</a></li>
                            <li><span>10</span><a>一周热点排行内容</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection