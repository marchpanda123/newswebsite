@if (Auth::check())
    <ul class="nav navbar-nav">
        <li @if (Request::is('author/article*')) class="active" @endif>
            <a href="/author/article">文章</a>
        </li>
        <li @if (Request::is('author/tag*')) class="active" @endif>
            <a href="/author/tag">标签</a>
        </li>
    </ul>
@endif

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li><a href="/xineuropecom">登入</a></li>
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
