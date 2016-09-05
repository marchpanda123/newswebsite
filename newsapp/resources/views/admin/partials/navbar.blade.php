@if (Auth::check())
    <ul class="nav navbar-nav">
        <li @if (Request::is('admin/article*')) class="active" @endif>
            <a href="/admin/article">文章</a>
        </li>
        <li @if (Request::is('admin/tag*')) class="active" @endif>
            <a href="/admin/tag">标签</a>
        </li>
        <li @if (Request::is('admin/user*')) class="active" @endif>
            <a href="/admin/user">用户</a>
        </li>
        <li @if (Request::is('admin/ad*')) class="active" @endif>
            <a href="/admin/ad">广告</a>
        </li>
        <li @if (Request::is('admin/video*')) class="active" @endif>
            <a href="/admin/video">视频</a>
        </li>
    </ul>
@endif

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li><a href="/xineuropecom">进入</a></li>
        <li><a href="/register">退出</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
               aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/xineuropecomout">注销</a></li>
                <li><a href="/system/profile">设置</a></li>
            </ul>
        </li>
    @endif
</ul>
