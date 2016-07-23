@extends('front.template')
@section('content')
    <div class="news-content">
        <div class="row">
            <div class="article-layout-flex">
                @if(count($articles)!=null)
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
                @endif
            </div>
        </div>
    </div>
@endsection

@section('pagination')
    <div>
        {!! $articles->render() !!}
    </div>
@endsection