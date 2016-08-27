@extends('front.template')
@section('content')
    <div class="news-content">
        <!--xineuropecontent-->
        <div class="module-highlight">
            <div class="row highlight-row">
                <div style="background:#e7e8e1;padding-top:30px;padding-bottom:20px;" class="hidden-xs hidden-sm"><img src="/assets/image/logo1.png" style="display:inline-block;"><img src="/assets/image/logo2.png" id="logo2" style="display:inline-block;"></div>
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
                                    <p>{{$carousel_news[$i]->title}}</p> 
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
                    @foreach($hotimgs as $hotimg)
                        <div class="module col-sm-6 col-lg-6">
                            <div class="responsive-image hidden-xs">
                                <img src="{{$hotimg->page_image}}" alt="{{$hotimg->title}}" class="img-responsive">
                            </div>
                            <div class="latest-caption">
                                <p>{{$hotimg->title}}</p>
                            </div>
                            <div class="latest-intro visible-xs">
                                {{$hotimg->intro}}
                            </div>
                            <a class="article-link" href="/article/{{$hotimg->id}}"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
           
         
        <!-- Main body -->
        <div class="module-index-article hidden-xs hidden-sm">
            @for($i = 0 ; $i < count($index_articles) ; $i++)
               
                @if($i == '0')
                <div class="row">
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
                </div>
                @endif

                @if($i == '2')
                <div class="row">
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

                    <iframe src="http://www.thinkpage.cn/weather/weather.aspx?uid=UF2B28B54A&cid=PAR|%E5%B7%B4%E9%BB%8E&l=zh-CHS&p=SMART&a=0&u=C&s=31&m=2&x=1&d=5&fc=C6C6C6&bgc=&bc=&ti=0&in=0&li=" frameborder="0" scrolling="no" width="660" height="90" allowTransparency="true"></iframe>

                    <!-- <iframe src="http://www.thinkpage.cn/weather/weather.aspx?uid=UF2B28B54A&cid=CHBJ000000&l=zh-CHS&p=SMART&a=1&u=C&s=4&m=2&x=1&d=5&fc=&bgc=&bc=&ti=0&in=0&li=" frameborder="0" scrolling="no" width="1000" height="27" allowTransparency="true"></iframe> -->
                </div>
                @endif
            
                @if($i == '4')
                <section class="module-social">
                    <div class="module-social-container">  
                        <div class="row topic-row">
                            <div class="col-sm-8 module-social-layout">
                                <h2 class="module-social-headingbox">
                                    <a class="module-social-heading _tag _tag-social" style="text-decoration:none">{{$index_articles[$i]->name}}</a>
                                </h2>
                                @foreach($topics as $topic)
                                <div class="responsive-image img-op hidden-xs module-social-resposive">
                                    <div>
                                        <img src="{{$topic->page_image}}" class="img-responsive module-social-img-bg">
                                    </div>
                                    <div class="module-social-content-bg hidden-xs">
                                        <h3 class="module-social-title-bg"><a>{{$topic->title}}</a></h3>
                                    </div>
                                    <div class="module-social-sum">
                                        <p class="module-social-summary-bg">{{$topic->intro}}</p>
                                    </div>
                                    <a class="article-link" href="/article/{{$topic->id}}"></a>
                                </div>
                                @endforeach

                                <div class="row module-social-smcontent">
                                @if(isset($index_articles[$i]))
                                @foreach($index_articles[$i]->articles as $article)
                                    <div class="col-sm-3 module-social-sm img-op">
                                        <div class="responsive-image hidden-xs">
                                            <img src="{{$article->page_image}}" class="img-responsive module-social-img">
                                        </div>
                                        <div class="module-social-content">
                                            <h3 class="module-social-title"><a>{{$article->title}}</a></h3>
                                            <p class="module-social-summary">{{$article->intro}}</p>
                                            <a class="module-social-tag">{{$article->published_at}}</a>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </div>
                                @endforeach
                                @endif
                                </div>
                            </div>
                            <!--latest news -->
                            <div class="col-sm-4 module-cult-layout">
                                
                                <div class="module-most-popular">
                                    <div class="module-top-list">
                                        <h2 class="top-list-heading">最新资讯</h2>
                                        <ul class="top-list_list">
                                        @foreach($hotevens as $hoteven)
                                            <li class="top-list-item">
                                                <a class="top-list-link" href="/article/{{$hoteven->id}}"><img src="{{$hoteven->page_image}}" class="img-responsive article-img">
                                                <a class="top-list-headline" style="text-decoration:none" href="/article/{{$hoteven->id}}">{{$hoteven->title}}</a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                                
                                <h2 class="module-fashion-headingbox">
                                    <a class="module-fashion-heading _tag _tag-fashion" style="text-decoration:none">{{$index_articles[$i+1]->name}}</a>
                                </h2>
                                <div class="module-fashion-containersm">
                                    @if(isset($index_articles[$i+1]))
                                    @foreach($index_articles[$i+1]->articles as $article)
                                    <div class="responsive-image hidden-xs img-op">
                                        <a href="/article/{{$article->article_id}}"><img src="{{$article->page_image}}" class="img-responsive module-fashion-img">
                                    </div>
                                    <div class="module-fashion-content">
                                        <h3 class="module-fashion-title"><a href="/article/{{$article->article_id}}" style="text-decoration:none">{{$article->title}}</h3>
                                        <p class="module-fashion-summary">{{$article->intro}}</p>
                                        <a class="module-fashion-tag" style="text-decoration:none">{{$article->published_at}}</a>
                                    </div>
                                    
                                    @endforeach
                                    @endif
                                </div>
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
                </section>
                @endif
                
                @if($i == '6')
                <div class="row">
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
                </div>
                @endif
                
                @if($i == '8')
                <div class="row">
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
                </div>
                @endif
                
                @if($i == '10')
                <section class="module-social">
                    <div class="module-social-container">  
                        <div class="row topic-row">
                            <h2 class="module-social-headingbox">
                                    <p class="module-social-heading-zl _tag _tag-zl" style="text-decoration:none">更多关于海外网</p>
                                </h2>
                            <div class="col-sm-4 module-cult-layout">
                                
                                <div class="module-most-popular-zl">
                                    <div class="module-top-list">
                                        <h2 class="top-list-heading-zl">专栏</h2>
                                        <ul class="top-list_list">
                                        @for ($j = 0; $j < count($columns); $j++)
                                            <li class="top-list-item-zl" @if($j%2==0) style="background:#363636;"  @endif>
                                                <a class="top-list-link" href="/article/{{$columns[$j]->id}}"><img src="{{$columns[$j]->page_image}}" class="img-responsive article-img">
                                                <a class="top-list-headline-zl" style="text-decoration:none" href="/article/{{$columns[$j]->id}}">{{$columns[$j]->title}}</a>
                                            </li>
                                        @endfor
                                        </ul>
                                    </div>
                                </div>
                                
                                <h2 class="module-fashion-headingbox">
                                    <a class="module-fashion-heading _tag _tag-fashion" style="text-decoration:none">{{$index_articles[$i]->name}}</a>
                                </h2>
                                <div class="module-fashion-containersm">
                                    @if(isset($index_articles[$i]))
                                    @foreach($index_articles[$i]->articles as $article)
                                    <div class="responsive-image hidden-xs img-op">
                                        <a href="/article/{{$article->article_id}}"><img src="{{$article->page_image}}" class="img-responsive module-fashion-img">
                                    </div>
                                    <div class="module-fashion-content">
                                        <h3 class="module-fashion-title"><a href="/article/{{$article->article_id}}" style="text-decoration:none">{{$article->title}}</h3>
                                        <p class="module-fashion-summary">{{$article->intro}}</p>
                                        <a class="module-fashion-tag" style="text-decoration:none">{{$article->published_at}}</a>
                                    </div>
                                    
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-8 module-social-layout">

                                
                                <div class="responsive-image img-op hidden-xs module-social-resposive">
                                    <div style="margin:10px">
                                        <iframe frameborder="0" width="800" height="450" src="http://v.qq.com/iframe/player.html?vid=b0021tdo5w0&tiny=0&auto=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <h2 class="module-fashion-headingbox">
                                    <a class="module-fashion-heading _tag _tag-last" style="text-decoration:none">{{$index_articles[$i+1]->name}}</a>
                                </h2>
                                <div class="row module-social-smcontent">
                                @if(isset($index_articles[$i+1]))
                                @foreach($index_articles[$i+1]->articles as $article)
                                    <div class="col-sm-3 module-social-sm img-op">
                                        <div class="responsive-image hidden-xs">
                                            <img src="{{$article->page_image}}" class="img-responsive module-social-img">
                                        </div>
                                        <div class="module-social-content">
                                            <h3 class="module-social-title"><a>{{$article->title}}</a></h3>
                                            <p class="module-social-summary">{{$article->intro}}</p>
                                            <a class="module-social-tag">{{$article->published_at}}</a>
                                        </div>
                                        <a class="article-link" href="/article/{{$article->article_id}}"></a>
                                    </div>
                                @endforeach
                                @endif
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
                @endif

            @endfor
        </div>

        <!-- mobile -->
        <div class="module-index-article visible-xs visible-sm">
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

