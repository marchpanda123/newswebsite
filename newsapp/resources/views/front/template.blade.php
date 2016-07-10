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

    <nav class="st-menu st-effect-1 visible-xs visible-sm" id="menu-1">
        <a style='text-decoration:none;' href="/"><h2 class="icon icon-lab">新闻网</h2></a>
            <ul class="siderbar-text"> 
                <li class="visible-xs">
                <form action="/search" method="GET" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" placeholder="Search">
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
    <nav class="st-menu st-effect-111 visible-xs visible-sm" id="menu-1">
        <h2 class="icon icon-lab">新欧洲</h2>
            <ul>
                <li><a href="http://www.xineurope.com/"><span class="imgicon"><img src="/assets/image/link.png" class="img-responsive"></span>门户</a></li>
                <li><a href="http://bbs.xineurope.com/"><span class="imgicon"><img src="/assets/image/meeting.png" class="img-responsive"></span>战法</a></li>
                <li><a href="http://bbs.xineurope.com/home.php"><span class="imgicon"><img src="/assets/image/placeholder.png" class="img-responsive"></span>家园</a></li>
                <li><a href="http://buy.xineurope.com/"><span class="imgicon"><img src="/assets/image/coins.png" class="img-responsive"></span>跳蚤</a></li>
                <li><a href="http://live.xineurope.com"><span class="imgicon"><img src="/assets/image/chat.png" class="img-responsive"></span>点评</a></li>
                <li><a href="http://www.ouituan.com"><span class="imgicon"><img src="/assets/image/cart.png" class="img-responsive"></span>团购</a></li>
                <li><a href="http://www.yoyoer.com/"><span class="imgicon"><img src="/assets/image/airplane.png" class="img-responsive"></span>旅游</a></li>
                <li><a href="http://event.xineurope.com"><span class="imgicon"><img src="/assets/image/hearts.png" class="img-responsive"></span>活动</a></li>
            </ul>
    </nav>
    <div class="st-pusher">

        <div class="st-content"><!-- this is the wrapper for the content -->

            <div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
                        <!-- Top Navigation -->
                {{-- header nav --}}
                <div class="hdNav hidden-xs hidden-sm">
                    <div class="hdNavbar">
                    <nav data-resizeable="true" class="hdNavLists" data-transform="byClass">
                        <a target="_blank" href="http://www.xineurope.com/">门户</a>
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
                    <div class="top-text hidden-xs hidden-sm">
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
                </div>

                {{--Siderbar--}}
                <div class="main clearfix">
                    <div id="st-trigger-effects" class="column siderbarnav visible-xs visible-sm"> 
                        <button data-effect="st-effect-111" class="sb-btn2"><span><img src="/assets/image/link8.png" class="img-responsive"></span></button>
                        <button data-effect="st-effect-1" class="sb-btn1"><span><img src="/assets/image/menu4.png" class="img-responsive"></span></button>
                    </div>  
                </div><!-- /main -->
        
                {{-- Navigation Bar --}}

                <header class="navbar navbar-default hidden-xs hidden-sm">
                    <div class="container-fluid">                
                    <nav id="bs-navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav"> 
                            @include('front.nav')
                        </ul>
                        <div class="container">
                            <form action="/search" method="GET" role="search">
                                <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                    placeholder="Search" autocomplete="on">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="iconfont">&#xe674;</span>
                                    </button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </nav>
                    </div>
                </header>   

                @yield('content')

                <a href="#0" class="cd-top">Top</a>
                <div class="linkme">
                    <dl>
                        <dt>巴黎(广告):</dt>
                        <dd>0033 (0)1 46 78 00 16</dd>
                        <dd>pub@xineurope.com</dd>
                    </dl>
                    <dl>
                        <dt>上海(广告):</dt>
                        <dd>0086 (0)21 60 43 88 86#802</dd>
                        <dd>ads-shanghai@xineurope.com</dd>
                    </dl>
                    <dl>
                        <dt>投诉/客服</dt>
                        <dd><strong>投诉: </strong>tousu@xineurope.com</dd>
                        <dd><strong>客服: </strong>0033 (0)1 46 78 00 16</dd>
                    </dl>
                    <dl class="visible-xs visible-sm">
                        <dt>关注旅法华人战报(公共微信号)：DailyFR</dt>
                    </dl>
                </div>


                <div class="module-footer">
                    <div class="module-footer-inner">
                        <div class="module-footer-content">
                            <p class="module-footer-text">
                                <a href="http://corp.xineurope.com/company/" target="_black">关于我们</a>|
                                <a href="http://corp.xineurope.com/about/service.php" target="_black">服务条款</a>|
                                <a href="http://corp.xineurope.com/company/contact.php" target="_black">联系我们</a>|
                                <a href="http://corp.xineurope.com/advertise/" target="_black">广告服务</a>|
                                <a href="http://corp.xineurope.com/company/copyme.php" target="_black">复制新欧洲</a>
                            </p>  
                            <p class="module-footer-right">海外网版权所有，未经书面授权禁止使用</p>
                            <p class="module-footer-copyright">Copyright © 2015 by news.xineurope.com all rights reserved</p>
                        </div>
                    </div>
                </div>
            @yield('scripts')
            </div><!-- /st-content-inner -->

        </div><!-- /st-content -->
    </div><!-- /st-pusher -->
</div><!-- /st-container --> 
<script src="/assets/js/libraries.min.js"></script>
<script src="/assets/js/index.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/modernizr.custom.js"></script>
<script src="/assets/js/sidebarEffects.js"></script>  

</body>
</html>