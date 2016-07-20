@extends('front.template')
@section('content')
<!-- nav -->
<ul id="breadcrumbs-one">
    <li><a href="/">主页</a></li>
    <!-- @foreach($article->tags as $tag)
    <li><a href="/subject/{{$tag->id}}">{{$tag->name}}</a></li>
    @endforeach -->
    <li><a href="">{{$article->title}}</a></li>
</ul>
<!-- content -->
<div class="news-content">
    <div class="row">
        <article class="article-body col-sm-8">
            <h1>{{$article->title}}</h1>
            <div class="article-info">
                <ul class="list-inline">
                    @foreach ($article->tags as $tag)
                    <li>{{$tag->name}}</li>
                    @endforeach
                    <li class="article-author">{{$article->user->nickname}}</li>
                    <li>{{$article->publish_date}}</li>
                    <li>{{$article->publish_time}}</li>
                </ul>
                <a href="#shareget" class="share-to"><img src="/assets/image/shareto.png" class="sharetoimg"><span>分享</span></a>
                <p>{{$article->intro}}</p>
                
            </div>
            <div>
                {!! $article->content !!}
            </div>
            <!--MOB SHARE BEGIN-->
            <p class="share-sty" id="shareget">分享此项报道</p>
            <ul class="-mob-share-list">
                <li class="-mob-share-weibo"><img src="/assets/image/share-sina.png"></li>
                <li class="-mob-share-qzone"><img src="/assets/image/share-qzone.png"></li>
                <li class="-mob-share-weixin"><img src="/assets/image/share-weixin.png"></li>
                <li class="-mob-share-douban"><img src="/assets/image/share-db.png"></li>
                <li class="-mob-share-facebook"><img src="/assets/image/share-fb.png"></li>
                <li class="-mob-share-twitter"><img src="/assets/image/share-twitter.png"></li>
            </ul>
            <!--MOB SHARE END-->
            <script id="-mob-share" src="http://f1.webshare.mob.com/code/mob-share.js?appkey=14dd4b3814132"></script>
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