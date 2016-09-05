<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('news.title')}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/image/favicon.ico" media="screen" />
    <link href="/assets/css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/component.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/xineurope.css">
    @yield('styles')
</head>
<body>

<div id="st-container" class="st-container">
    <nav class="st-menu st-effect-1 visible-xs visible-sm" id="menu-1">
        <a style='text-decoration:none;' href="/"><h2 class="icon icon-lab">新闻网</h2></a>
            <ul class="siderbar-text"> 
                <li class="visible-xs visible-sm">
                <form action="/search" method="GET" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" placeholder="搜索">
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
                <!-- <div class="hdNav hidden-xs hidden-sm">
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
                </div> -->
                {{-- logo Bar --}}
                
                    <!-- <div class="top-blank"></div>
                    <div class="top-text hidden-xs hidden-sm">
                        <p class="top-text-content"></p>
                        <span class="top-line"></span>
                        <a class="top-text-xcode">关注旅法华人战报</a>
                        <span class="top-none"></span>
                        <div class="top-qrcode responsive-image">
                            <img src="/assets/image/qrcode.jpg" class="img-responsive top-qrcode-img">
                        </div>
                    </div>
                    <div class="top-middle"></div> -->
                <div class="visible-xs visible-sm">
                    <a class="logo-img1" href="http://www.haiwainet.cn"><img src="/assets/image/logo1.png" id="logo1"></a><a class="logo-img2" href="/"><img src="/assets/image/logo2.png" id="logo2"></a>
                </div> 
                {{--Siderbar--}}
                <div class="main clearfix">
                    <div id="st-trigger-effects" class="column siderbarnav visible-xs visible-sm"> 
                        
                        <button data-effect="st-effect-1" class="sb-btn1"><span><img src="/assets/image/menu4.png" class="img-responsive"></span></button>
                    </div>  
                </div><!-- /main -->
                {{-- Navigation Bar --}}
                <header class="navbar navbar-default hidden-xs hidden-sm">
                    <div class="navbar-row">                
                    <nav id="bs-navbar" class="collapse navbar-collapse">
                        <a href="/"><img src="/assets/image/hww.png" class="nav-logo-hww"></a>
                        <ul class="nav navbar-nav"> 
                            @include('front.nav')
                        </ul>
                        <div class="container">
                            <form action="/search" method="GET" role="search">
                                <div class="input-group topsearchbar">
                                <input type="text" class="form-control" name="q"
                                    placeholder="搜索" autocomplete="on">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="iconfont">&#xe674;</span>
                                    </button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </nav>
                    <!-- xineurope nav -->
                    <nav class="cd-stretchy-nav hidden-xs hidden-sm">
                        <a class="cd-nav-trigger" href="#0">
                            <span aria-hidden="true"></span>
                        </a>
                        <ul>
                            <li><a href="http://www.xineurope.com" class="active" target="_blank"><span>门户</span></a></li>
                            <li><a href="http://zhanbao.xineurope.com" target="_blank"><span>新闻</span></a></li>
                            <li><a href="http://bbs.xineurope.com" target="_blank"><span>战法</span></a></li>
                            <li><a href="http://buy.xineurope.com" target="_blank"><span>跳蚤</span></a></li>
                            <li><a href="http://study.xineurope.com" target="_blank"><span>留学</span></a></li>
                            <li><a href="http://live.xineurope.com" target="_blank"><span>黄页</span></a></li>
                            <li><a href="http://www.newsavour.com" target="_blank"><span>寻味</span></a></li>
                            <li><a href="http://www.topshun.com/" target="_blank"><span>全顺</span></a></li>
                            <li><a href="http://www.yoyoer.com" target="_blank"><span>游游</span></a></li>
                            <li><a href="http://www.ouituan.com" target="_blank"><span>欧团</span></a></li>
                        </ul>
                        <span aria-hidden="true" class="stretchy-nav-bg"></span>
                    </nav>
                    </div>
                </header>   
                @yield('content')
                <a href="#0" class="cd-top">Top</a>


                <div class="linkme visible-xs visible-sm">
                    <dl>
                        <dt>巴黎(广告):</dt>
                        <dd>0033 (0)1 46 78 00 16</dd>
                        <dd>pub@xineurope.com</dd>
                    </dl>
                    <dl>
                        <dt>上海(广告):</dt>
                        <dd>0086 (0)21 60 43 88 86 #802</dd>
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
                <div id="gradline" class="visible-xs visible-sm"></div>
                <div class="module-footer visible-xs visible-sm">
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


                <footer class="hidden-xs hidden-sm">
                    <div class="footer-main">
                        <div class="row footer-container">
                            <div class="col-lg-4 col-md-4">
                                <div><p class="footer-text">关于我们</p></div>
                                <div><p class="footer-topic"><a href="http://corp.xineurope.com/company/" target="_black" id="footer-about" >易能传媒</a></p></div>
                                <div><p class="footer-topic"><a href="http://corp.xineurope.com/about/service.php" target="_black" id="footer-about">服务条款</a></p></div>
                                <div><p class="footer-topic"><a href="http://corp.xineurope.com/company/contact.php" target="_black" id="footer-about">联系我们</a></p></div>
                                <div><p class="footer-topic"><a href="http://corp.xineurope.com/advertise/" target="_black" id="footer-about">广告服务</a></p></div>
                                <div><p class="footer-topic"><a href="http://corp.xineurope.com/company/copyme.php" target="_black" id="footer-about">复制新欧洲</a></p></div>
                                <div><p class="footer-topic"><a href="http://corp.xineurope.com/webapp/index.php" target="_black" id="footer-about">移动应用</a></p></div>
                                <div><p class="footer-topic"><a href="http://www.ouituan.com/" target="_black" id="footer-about">欧团网</a></p></div>
                                <div><p class="footer-topic"><a href="http://www.yoyoer.com/" target="_black" id="footer-about">游游旅行</a></p></div>
                                <div><p class="footer-topic"><a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120323105522451" target="_black" id="footer-about">营业许可</a></p></div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><p class="footer-text">联系方式</p></div>
                                <div><p class="footer-topic">巴黎(广告)</p></div>
                                <div><p class="footer-topic"><img src="/assets/image/telephone.png" class="footer-img-icon">0033 (0)1 46 78 00 16</p></div>
                                <div><p class="footer-topic"><img src="/assets/image/envelope.png" class="footer-img-icon">pub@xineurope.com</p></div>
                                <div><p class="footer-topic">上海(广告)</p></div>
                                <div><p class="footer-topic"><img src="/assets/image/telephone.png" class="footer-img-icon">0086 (0)21 60 43 88 86#802</p></div>
                                <div><p class="footer-topic"><img src="/assets/image/envelope.png" class="footer-img-icon">ads-shanghai@xineurope.com</p></div>
                                <div><p class="footer-topic">投诉</p></div>
                                <div><p class="footer-topic"><img src="/assets/image/telephone.png" class="footer-img-icon">0033 (0)1 46 78 00 16 转运营部</p></div>
                                <div><p class="footer-topic"><img src="/assets/image/envelope.png" class="footer-img-icon">tousu@xineurope.com</p></div>

                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><p class="footer-text">合作企业</p></div>
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                                <img src="/assets/image/c1.jpg" class="footer-img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-lgmd-4"><p class="footer-text">关注旅法华人战报</p><img class="footer-img-code" src="/assets/image/qrcode.jpg"></div>

                            <div class="col-lg-4 col-md-4"></div>
                            <div class="col-lg-4 col-md-4"></div>
                        </div>
                        <div class="row">
                            <hr class="footer-line">
                        </div>

                        <div class="row footer-right">海外网版权所有，未经书面授权禁止使用</div>
                        <div class="row footer-right">Copyright © 2015 by news.xineurope.com all rights reserved</div>
                    </div>
                </footer>


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
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->


<!-- <script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.thinkpage.cn/widget/chameleon.js"))</script>
<script>tpwidget('init', {
    "flavor": "bubble",
    "location": "WX4FBXXFKE4F",
    "geolocation": "enabled",
    "position": "bottom-left",
    "margin": "10px 10px",
    "language": "zh-chs",
    "unit": "c",
    "theme": "chameleon",
    "uid": "UF2B28B54A",
    "hash": "f05efa31ce54d95135c115083530fd73"
});
tpwidget('show');</script> -->

<script type="text/javascript">
var duoshuoQuery = {short_name:"xineurope"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] 
         || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    </script>
<!-- 多说公共JS代码 end -->
</body>
</html>