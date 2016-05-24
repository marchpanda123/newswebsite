<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('news.title')}}</title>

    <link href="/assets/css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/component.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/normalize.css">
    
    @yield('styles')

</head>
<body>
<div id="st-container" class="st-container">
            <nav class="st-menu st-effect-1 visible-xs" id="menu-1">
                <a style='text-decoration:none;' href="/"><h2 class="icon icon-lab">新闻网</h2></a>
                <ul class="siderbar-text"> 
                    <li class="visible-xs">
                    <form action="/search" method="GET" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q"
                                   placeholder="Search for snippets">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="iconfont">&#xe674;</span>
                                    </button>
                                </span>
                        </div>
                    </form>
                </li>
                    @include('front.nav')
                </ul>
            </nav>
            <nav class="st-menu st-effect-111 visible-xs" id="menu-1">
                <h2 class="icon icon-lab">新欧洲</h2>
                <ul>
                    <li><a class="icon icon-data" href="http://www.xineurope.com/">门户</a></li>
                    <li><a class="icon icon-location" href="http://info.xineurope.com/">资讯</a></li>
                    <li><a class="icon icon-study" href="http://topic.xineurope.com/">专题</a></li>
                    <li><a class="icon icon-photo" href="http://bbs.xineurope.com/">战法</a></li>
                    <li><a class="icon icon-wallet" href="http://bbs.xineurope.com/home.php">家园</a></li>
                    <li><a class="icon icon-wallet" href="http://buy.xineurope.com/">跳蚤</a></li>
                    <li><a class="icon icon-wallet" href="http://live.xineurope.com">点评</a></li>
                    <li><a class="icon icon-wallet" href="http://www.ouituan.com">团购</a></li>
                    <li><a class="icon icon-wallet" href="http://www.yoyoer.com/">旅游</a></li>
                    <li><a class="icon icon-wallet" href="http://event.xineurope.com">活动</a></li>
                </ul>
            </nav>
            <div class="st-pusher">
                <div class="st-content"><!-- this is the wrapper for the content -->
                    <div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
                        <!-- Top Navigation -->
{{-- header nav --}}
            <div class="hdNav hidden-xs">
                <div class="hdNavbar">
                <nav data-resizeable="true" class="hdNavLists" data-transform="byClass">
                    <a target="_blank" href="http://www.xineurope.com/">门户</a>
                    <a target="_blank" href="http://info.xineurope.com/">资讯</a>
                    <a target="_blank" href="http://topic.xineurope.com/">专题</a>
                    <a target="_blank" href="http://bbs.xineurope.com/">战法</a>
                    <a target="_blank" href="http://bbs.xineurope.com/home.php">家园</a>
                    <a target="_blank" href="http://buy.xineurope.com/">跳蚤</a>
                    <a target="_blank" href="http://live.xineurope.com">点评</a>
                    <a target="_blank" href="http://www.ouituan.com">团购</a>
                    <a target="_blank" href="http://www.yoyoer.com/">旅游</a>
                    <a target="_blank" href="http://event.xineurope.com">活动</a>
                </nav>
            </div>
            <div class="hdNavbtn">
                <div class="bdNavbtnbar"><span class="bdNavbtntext">新欧洲</span></div>
            </div>
            </div>
{{-- logo Bar --}}
            <div>
                <div class="top-blank"></div>
                <div class="top-text">
                    <p class="top-text-content"></p>
                    <span class="top-line"></span>
                    <a class="top-text-xcode">关注旅法华人战报</a>
                    <span class="top-none"></span>
                    <div class="top-qrcode responsive-image">
                        <img src="/assets/image/qrcode.jpg" class="img-responsive top-qrcode-img">
                    </div>
                </div>
                <div class="top-middle"></div>
                    <a class="logo-img" href="/"><img src="/assets/image/logo hw.png"></a>
                <div class="top-footer"></div>
            </div>
{{--Siderbar--}}
                <div class="main clearfix">
                    <div id="st-trigger-effects" class="column siderbarnav visible-xs"> 
                        <button data-effect="st-effect-111" class="sb-btn2"><span><img src="/assets/image/house.png" class="img-responsive"></span></button>
                        <button data-effect="st-effect-1" class="sb-btn1"><span><img src="/assets/image/notepad.png" class="img-responsive"></span></button>
                    </div>  
                </div><!-- /main -->
        
{{-- Navigation Bar --}}

            <header class="navbar navbar-default hidden-xs">
                <div class="container-fluid">                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed btn_change" data-toggle="collapse" data-target="#bs-navbar">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>   
                </div> 
                <nav id="bs-navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="visible-xs">
                            <form action="/search" method="GET" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q"
                                   placeholder="Search for snippets">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">
                                                <span class="iconfont">&#xe674;</span>
                                            </button>
                                            <button class="btn btn-danger" type="reset">
                                                <span class="iconfont">&#xe661;</span>
                                            </button>
                                        </span>
                                </div>
                            </form>
                        </li>
                        @include('front.nav')
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden-xs">
                            <a href="#toggle-search" class="animate">
                                <span class="iconfont">&#xe674;</span>
                            </a>
                        </li>
                    </ul>
                    <div class="news-search animate">
                        <div class="container">
                            <form action="/search" method="GET" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q"
                                   placeholder="Search for snippets and hit enter">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="reset">
                                        <span class="iconfont">&#xe661;</span>
                                    </button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

@yield('content')
        <div class="module-footer">
            <div class="module-footer-inner">
                <div class="module-footer-content">
                    <p class="module-footer-text">
                        <a>关于海外网</a>|
                        <a>广告服务</a>|
                        <a>联系我们</a>|
                        <a>网站地图</a>|
                        <a>法律顾问：</a>
                    </p>
                    <p class="module-footer-right">海外网版权所有，未经书面授权禁止使用</p>
                    <p class="module-footer-copyright">Copyright 2011-2014 by www. .cn all rights reserved</p>
                </div>
            </div>
        </div>



<script src="/assets/js/libraries.min.js"></script>
<script src="/assets/js/index.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/modernizr.custom.js"></script>
<script src="/assets/js/sidebarEffects.js"></script>
@yield('scripts')
        </div><!-- /st-content-inner -->
    </div><!-- /st-content -->
</div><!-- /st-pusher -->
</div><!-- /st-container -->   
</body>
</html>