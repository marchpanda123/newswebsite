@foreach($tags as $tag)
    <li @if (Request::is("subject/$tag->id")) class="active" @endif>
        <a href="/subject/{{$tag->id}}" class="nav-font">{{$tag->name}}</a>
    </li>
@endforeach