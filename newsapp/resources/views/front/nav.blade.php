@foreach($tags as $tag)
    <li @if (Request::is("subject/$tag->id")) class="active" @endif class="hidden-xs hidden-sm">
        <a href="/subject/{{$tag->id}}" class="nav-font">{{$tag->name}}</a>
    </li>
@endforeach

@foreach($tags as $tag)
    <li class="visible-xs visible-sm">
        <a href="/subject/{{$tag->id}}" class="nav-font"><span class="imgicon"><img src="/assets/image/interface.png" class="img-responsive"></span>{{$tag->name}}</a>
    </li>
@endforeach