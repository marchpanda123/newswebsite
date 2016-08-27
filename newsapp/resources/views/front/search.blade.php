@extends('front.template')
@section('content')
    <div class="news-content">
        <div class="row">
        @if(count($articles)!=null)
		    <p class="push-text" style="font-size:24px;font-weight:bold;color:black;padding-bottom:6px;">搜索结果<img src="/assets/image/magnifying-glass.png" style="display:inline-block;padding-left:5px;"></p>
		        <div class="article-layout-flex">
                    @foreach($articles as $article)
                        <div class="article-list col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <article class="article-item">
                                <div class="article-image responsive-image">
                                    <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                         class="img-responsive">
                                </div>
                                <div class="article-text">
                                    <h3 class="article-title">{{$article->title}}</h3>
                                    <p class="article-intro">{{$article->intro}}</p>
                                    <span class="article-intro">{{$article->published_at}}</span>
                                </div>
                                <a class="article-link" href="/article/{{$article->id}}"></a>
                            </article>
                        </div>
                    @endforeach
                @else
                    <div class="no-result">
                        <div class="no-result-img">
                            <img src="/assets/image/search.png"><span>结果</span>
                        </div>
                        <div class="no-result-text">
                            <p>对不起，没有可用的内容结果显示</p>
                        </div>
                        <div class="no-result-sus">
                            <p>建议您</p>
                            <ul class="noresultul">
                                <li>确保您的关键字全部正确无误</li>
                                <li>尝试一下不同的关键字进行搜索</li>
                                <li>使用一些普通的关键字进行搜索</li>
                            </ul>
                        </div>
                    </div>
                
            </div>
            @endif
        </div>
    </div>
    
    <div class="news-content visible-xs visible-sm">
        <p>热门推荐</p>
        <div class="row">
            <div class="article-layout-flex">
                    @foreach($latest_news as $latest_new)
                        <div class="article-list col-xs-12 col-sm-6">
                            <article class="article-item">
                                <div class="article-image responsive-image">
                                    <img src="{{$latest_new->page_image}}" alt="{{$latest_new->title}}"
                                         class="img-responsive">
                                </div>
                                <div class="article-text">
                                    <h3 class="article-title">{{$latest_new->title}}</h3>
                                    <p class="article-intro">{{$latest_new->intro}}</p>
                                    <span class="article-intro">{{$latest_new->published_at}}</span>
                                </div>
                                <a class="article-link" href="/article/{{$latest_new->id}}"></a>
                            </article>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>

    <div class="push-new hidden-xs hidden-sm">
	    <div class="row">
	    <p class="push-text" style="border-bottom:1px solid #dcdcdc;font-size:24px;font-weight:bold;color:black;padding-bottom:6px;">更多推荐<img src="/assets/image/cursor.png" style="display:inline-block;padding-left:5px;"></p>
	    @foreach($latest_news as $latest_new)
	    <div class="col-xs-12 col-sm-6 col-md-4 col-diy">
	        <div class="boxgrid caption">
	            <a href="/article/{{$latest_new->id}}" target="_BLANK"><img src="{{$latest_new->page_image}}"/>
	            <div class="cover boxcaption">
	                <h3>{{$latest_new->title}}</h3>
	                <p>{{$latest_new->intro}}<br/></p>
	            </div>
	        </div>
	    </div>
	    @endforeach
	    </div>
	</div>



@endsection

@section('pagination')
    <div>
        {!! $articles->render() !!}
    </div>
@endsection