@extends('front.template')
@section('content')
    <div class="news-content">
        <div class="module-highlight">
            <div class="row">
                <div id="carousel-news-generic" class="carousel slide col-sm-12 col-md-6" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < count($carousel_news); $i++)
                            <li data-target="#carousel-news-generic" data-slide-to="{{$i}}"
                                @if($i==0)class="active" @endif></li>
                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @for ($i = 0; $i < count($carousel_news); $i++)
                            <div class="item @if($i==0) active @endif">
                                <div class="responsive-image">
                                    <img src="{{$carousel_news[$i]->page_image}}" alt="Carousel News"
                                         class="img-responsive">
                                </div>
                                <div class="carousel-caption">
                                    {{$carousel_news[$i]->title}}
                                </div>
                                <a class="article-link" href="/article/{{$carousel_news[$i]->id}}"></a>
                            </div>
                        @endfor
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-news-generic" role="button" data-slide="prev">
                        <span class="iconfont iconfont-left">&#xe62c;</span>
                        <span class="sr-only">前一个</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-news-generic" role="button" data-slide="next">
                        <span class="iconfont iconfont-right">&#xe662;</span>
                        <span class="sr-only">后一个</span>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6">
                    @foreach($latest_news as $news)
                        <div class="module col-sm-6 col-lg-6">
                            <div class="responsive-image hidden-xs">
                                <img src="{{$news->page_image}}" alt="{{$news->title}}" class="img-responsive">
                            </div>
                            <div class="latest-caption">
                                <strong>{{$news->title}}</strong>
                            </div>
                            <div class="latest-intro visible-xs">
                                {{$news->intro}}
                            </div>
                            <a class="article-link" href="/article/{{$news->id}}"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="module-ads">
            <div class="row">
                @foreach($ads as $ad)
                    <div class="col-xs-12 col-sm-6 module-ad @if($i++==1) hidden-xs @endif">
                        <img src="{{$ad->image_path}}" alt="{{$ad->name}}" class="img-responsive ad-image">
                        <a class="article-link" href="http://{{$ad->url}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Main body -->
        <div class="module-index-article">
            <div class="row">
                @for($i = 0 ; $i < count($index_articles) ; $i++)           
                        @if($i%2 == '0')
                            <div class="module-position"> 
                                <h2 class="module-title">
                                    <a href="/subject/{{$index_articles[$i]->id}}" class="module-title-link _tag
                                    @if($i=='0') _tag @endif @if($i=='2') _tagsocial @endif @if($i=='4') _tagcult @endif @if($i=='6') _tagfash @endif @if($i=='8') _tagheal @endif @if($i=='10') _tagadd @endif">
                                    {{$index_articles[$i]->name}}
                                    </a>
                                </h2>
                                @if(isset($index_articles[$i+1]))
                                <h2 class="module-title module_line">/</h2>
                                <h2 class="module-title module_title">
                                    <a href="/subject/{{$index_articles[$i+1]->id}}" class="module-title-link">
                                        {{$index_articles[$i+1]->name}}
                                    </a>
                                </h2>
                                @endif
                            </div>
                            <div>
                                <div class="article-layout-flex">
                                    @foreach($index_articles[$i]->articles as $article)
                                        <div class="article-list col-xs-12 col-sm-4">
                                            <article class="article-item img-op">
                                                <div class="article-image responsive-image">
                                                    <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                    class="img-responsive">
                                                </div>
                                                <div class="article-text">
                                                    <h3 class="article-title">{{$article->title}}</h3>
                                                    <p class="article-intro">{{$article->intro}}</p>
                                                    <span class="article-intro">{{$article->published_at}}</span>
                                                </div>
                                                <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                            </article>
                                        </div>
                                    @endforeach
                                    @if(isset($index_articles[$i+1]))
                                    @foreach($index_articles[$i+1]->articles as $article)
                                        <div class="article-list col-xs-12 col-sm-4">
                                            <article class="article-item img-op">
                                                <div class="article-image responsive-image">
                                                    <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                        class="img-responsive">
                                                </div>
                                                <div class="article-text">
                                                    <h3 class="article-title">{{$article->title}}</h3>
                                                    <p class="article-intro">{{$article->intro}}</p>
                                                    <span class="article-intro">{{$article->published_at}}</span>
                                                </div>
                                                <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                            </article>
                                        </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        @endif
                @endfor
            </div>
        </div>
    </div>
@endsection

