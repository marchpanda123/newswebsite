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
                    <div class="carousel-inner img-op" role="listbox">
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
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-news-generic" role="button" data-slide="next">
                        <span class="iconfont iconfont-right">&#xe662;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6">
                    @foreach($latest_news as $news)
                        <div class="module col-sm-6 col-lg-6 img-op">
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
                @if($i=0)
                @endif
                @foreach($ads as $ad)
                    <div class="col-xs-12 col-sm-6 module-ad @if($i++==1) hidden-xs @endif">
                        <img src="{{$ad->image_path}}" alt="{{$ad->name}}" class="img-responsive ad-image">
                        <a class="article-link" href="http://{{$ad->url}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="module-index-article">
            <div class="row">
            @for($i = 0 ; $i < count($index_articles) ; $i++)
                        @if($i == 0)
                        <div class="module-position"> 
                        <h2 class="module-title">
                            <a href="/subject/{{$index_articles[$i]->id}}" class="module-title-link _tag">
                                {{$index_articles['0']->name}}
                            </a>
                        </h2>
                        @if(isset($index_articles['1']))
                        <h2 class="module-title module_line">/</h2>
                        <h2 class="module-title module_title">
                            <a href="/subject/{{$index_articles[$i]->id}}" class="module-title-link">
                                {{$index_articles['1']->name}}
                            </a>
                        </h2>
                        @endif
                        </div>
                        @endif

                        @if($i == 0)
                        <div>
                        <div class="article-layout-flex">
                            @foreach($index_articles['0']->articles as $article)
                                <div class="article-list col-xs-12 col-sm-4">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                                </div>
                            @endforeach
                            @if(isset($index_articles['1']))
                            @foreach($index_articles['1']->articles as $article)
                                <div class="article-list col-xs-12 col-sm-4">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                                </div>
                            @endforeach
                            @endif
                        </div>
                        </div>
                        @endif



                        @if($i == 2)
                        <div class="module-position">
                        <h2 class="module-title">
                            <a href="/subject/{{$index_articles['2']->id}}" class="module-title-link _tagsocial">
                                {{$index_articles['2']->name}}
                            </a>
                        </h2>
                        @if(isset($index_articles['3']))
                        <h2 class="module-title module_line">/</h2>
                        <h2 class="module-title module_title">
                            <a href="/subject/{{$index_articles['3']->id}}" class="module-title-link">
                                {{$index_articles['3']->name}}
                            </a>
                        </h2>
                        @endif
                        </div>
                        @endif

                        @if($i == 2)
                        <div class="article-layout-flex">
                            @foreach($index_articles['2']->articles as $article)
                                <div class="article-list col-xs-12 col-sm-4">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                                </div>
                            @endforeach
                            @if(isset($index_articles['3']))
                            @foreach($index_articles['3']->articles as $article)
                            <div class="article-list col-xs-12 col-sm-4">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        @endif



                        @if($i == 4)
                        <div class="module-position">
                        <h2 class="module-title">
                            <a href="/subject/{{$index_articles[$i]->id}}" class="module-title-link _tagcult">
                                {{$index_articles['4']->name}}
                            </a>
                        </h2>
                        @if(isset($index_articles['5']))
                        <h2 class="module-title module_line">/</h2>
                        <h2 class="module-title module_title">
                            <a href="/subject/{{$index_articles[$i]->id}}" class="module-title-link">
                                {{$index_articles['5']->name}}
                            </a>
                        </h2>
                        @endif
                        </div>
                        @endif

                        @if($i == 4)
                        <div class="article-layout-flex">
                            @foreach($index_articles['4']->articles as $article)
                                <div class="article-list col-xs-12 col-sm-4">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                                </div>
                            @endforeach
                            @if(isset($index_articles['5']))
                            @foreach($index_articles['5']->articles as $article)
                                <div class="article-list col-xs-12 col-sm-4">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                                </div>
                            @endforeach
                            @endif
                        </div>
                        @endif

                        
                        @if($i == 6)
                        <div class="module-position">
                        <h2 class="module-title">
                            <a href="/subject/{{$index_articles[$i]->id}}" class="module-title-link _tagfash">
                                {{$index_articles['6']->name}}
                            </a>
                        </h2>
                        @if(isset($index_articles['7']))
                        <h2 class="module-title module_line">/</h2>
                        <h2 class="module-title module_title">
                            <a href="/subject/{{$index_articles[$i]->id}}" class="module-title-link">
                                {{$index_articles['7']->name}}
                            </a>
                        </h2>
                        @endif
                        </div>
                        @endif

                        @if($i == 6)
                        <div class="article-layout-flex">
                            @foreach($index_articles['6']->articles as $article)
                                <div class="article-list col-xs-12 col-sm-4">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                                </div>
                            @endforeach
                            @if(isset($index_articles['7']))
                            @foreach($index_articles['7']->articles as $article)
                                <div class="article-list col-xs-12 col-sm-4">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                                </div>
                            @endforeach
                            @endif
                        </div>
                        @endif
                        



                        @if($i == 8)
                        <div class="module-position">
                        <h2 class="module-title">
                            <a href="/subject/{{$index_articles[$i]->id}}" class="module-title-link _tagheal">
                                {{$index_articles['8']->name}}
                            </a>
                        </h2>
                        </div>
                        @endif

                        @if($i == 8)
                        <div class="article-layout-flex">
                            @foreach($index_articles['8']->articles as $article)
                                <div class="article-list col-xs-12 col-sm-6">
                                    <article class="article-item img-op">
                                        <div class="article-image responsive-image">
                                            <img src="{{$article->page_image}}" alt="{{$article->title}}"
                                                 class="img-responsive">
                                        </div>
                                        <div class="article-text">
                                            <h3 class="article-title">{{$article->title}}</h3>
                                            <p class="article-intro">{{$article->intro}}</p>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        @endif




            @endfor

            </div>

        </div>

        <!-- tele section -->
    <section class="module-tele visible-lg">
    <div class="module-tele-container">
        <div class="module-tele-1">
            <p>巴黎（广告）：</p>
            <p>0033 (0)1 46 78 00 16</p>
            <p>pub@xineurope.com</p>
        </div>
        <div class="module-tele-2">
            <p>上海（广告）：</p>
            <p>0086 (0)21 60 43 88 86#802</p>
            <p>ads-shanghai@xineurope.com</p>
        </div>
        <div class="module-tele-3">
            <p>投诉：</p>
            <p>0033(0)146780016</p>
            <p>tousu@xineurope.com</p>
        </div>
        <div class="module-tele-4">
            <p></p>
            <p></p>
        </div>
    </div>
    </section>

    </div>
@endsection

