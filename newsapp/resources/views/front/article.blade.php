@extends('front.template')
@section('content')
<!-- nav -->
<ul id="breadcrumbs-one" style="display:none">
    <li><a href="/">主页</a></li>
    <!-- @foreach($article->tags as $tag)
    <li><a href="/subject/{{$tag->id}}">{{$tag->name}}</a></li>
    @endforeach -->
    <li><a href="">{{$article->title}}</a></li>
</ul>
<!-- content -->
<div class="news-content">
    <div class="row">
        <article class="article-body col-md-8">
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
                <div class="textchangediv">
                    <span>字体&nbsp&nbsp&nbsp&nbsp</span>
                    <span class="changesmall">小号</span>
                    <span>   |   </span>
                    <span class="changemiddle">中号</span>
                    <span>   |   </span>
                    <span class="changelarge">大号</span>
                </div>
            </div>
            <div id="article-text">
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

            <div class="push-new hidden-xs hidden-sm">
                <p class="push-text" style="border-bottom:1px solid #dcdcdc;font-size:24px;font-weight:bold;color:black;padding-bottom:6px;">更多推荐<img src="/assets/image/cursor.png" style="display:inline-block;padding-left:5px;"></p>
                @foreach($latest_news as $latest_new)
                <div>
                    <div class="boxgrid caption" style="margin-left:0px">
                        <a href="/article/{{$latest_new->id}}" target="_BLANK"><img src="{{$latest_new->page_image}}"/></a>
                        <div class="cover boxcaption">
                            <h3>{{$latest_new->title}}</h3>
                            <p>{{$latest_new->intro}}<br/></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!--MOB SHARE END-->
            <script id="-mob-share" src="http://f1.webshare.mob.com/code/mob-share.js?appkey=14dd4b3814132"></script>


    <!-- 多说评论框 start
    <div class="ds-thread" data-thread-key="" data-title="" data-url=""></div>
    多说评论框 end
    多说最新评论 start
    <div class="ds-recent-comments" data-num-items="5" data-show-avatars="1" data-show-time="1" data-show-title="1" data-show-admin="1" data-excerpt-length="70"></div>
    多说最新评论 end
    多说热评文章 start
    <div class="ds-top-threads" data-range="daily" data-num-items="5"></div>
    多说热评文章 end -->

    <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="{{$article->article_id}}" data-title="{{$article->title}}" data-url=""></div>
    <!-- 多说最新评论 start -->
    <div class="ds-recent-comments" data-num-items="5" data-show-avatars="1" data-show-time="1" data-show-title="1" data-show-admin="1" data-excerpt-length="70"></div>
    <!-- 多说最新评论 end -->
    <!-- 多说热评文章 start -->
    <div class="ds-top-threads" data-range="daily" data-num-items="5"></div>
    <!-- 多说热评文章 end -->
        </article>

<!-- rightside -->
        <div class="col-sm-4 article-right hidden-xs hidden-sm">
            <div class="article-container">
                <div class="article-popular">
                    <div class="article-popular-title">
                        <img src="/assets/image/news2.png" class="article-clock">
                        <p class="article-clocktext">热点快讯</p>
                    </div>
                    <ul class="article-list-content">
                       @foreach($hotevens as $hoteven)
                        <li class="article-list-right">
                            <a href="/article/{{$hoteven->id}}"><img src="{{$hoteven->page_image}}" class="img-responsive article-img">
                            <a class="article-content" href="/article/{{$hoteven->id}}">{{$hoteven->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="article-popular-pic">
                    <div class="article-popular-title">
                        <img src="/assets/image/picture2.png" class="article-clock">
                        <p class="article-clocktext">推荐图文</p>
                    </div>
                    <ul class="article-list-content">
                    @foreach($hotimgs as $hotimg)
                        <div class="article-box-style">
                            <a href="/article/{{$hotimg->id}}"><img src="{{$hotimg->page_image}}" class="img-responsive article-pic-img">
                            <div class="article-content-tw1">
                                <a href="/article/{{$hotimg->id}}">{{$hotimg->title}}</a>
                            </div>
                            <div class="article-content-tw2">
                                <a href="/article/{{$hotimg->id}}">{{$hotimg->intro}}</a>
                            </div>
                        </div>
                    @endforeach
                    </ul>
                </div>
                <div class="article-popular-rank">
                    <div class="article-popular-title">
                        <img src="/assets/image/rankings2.png" class="article-clock">
                        <p class="article-clocktext">热门排行</p>
                    </div>
                    <div class="article-rank">
                    <ul class="article-rank-list">
                    @foreach($ranks as $rank)
                        <li><span class="article-rank-list-num" @if($rank->is_ranks == '1'|| $rank->is_ranks == '2'|| $rank->is_ranks == '3')id="article-active" @endif>{{$rank->is_ranks}}</span><a  href="/article/{{$rank->id}}" class="article-rank-style">{{$rank->title}}</a></li>
                    @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile -->
<div class="article-right visible-xs visible-sm">
            <div class="article-container">
                <div class="article-popular">
                    <p>热点快讯<img src="/assets/image/nsp0.png" class="icon-rediankuaixun"></p>
                    <ul class="article-list-content">
                       @foreach($hotevens as $hoteven)
                        <li class="article-list-right">
                            <a href="/article/{{$hoteven->id}}"><img src="{{$hoteven->page_image}}" class="img-responsive article-img">
                            <a class="article-content" href="/article/{{$hoteven->id}}">{{$hoteven->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="article-popular-rank">
                    <p>热门排行<img src="/assets/image/nsp4.png" class="icon-rediankuaixun"></p>
                    <div class="article-rank">
                    <ul class="article-rank-list">
                    @foreach($ranks as $rank)
                        <li><span class="article-rank-list-num" @if($rank->is_ranks == '1'|| $rank->is_ranks == '2'|| $rank->is_ranks == '3')id="article-active" @endif>{{$rank->is_ranks}}</span><a  href="/article/{{$rank->id}}" class="article-rank-style">{{$rank->title}}</a></li>
                    @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>




@endsection