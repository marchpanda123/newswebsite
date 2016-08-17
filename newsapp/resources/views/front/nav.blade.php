@foreach($tags as $tag)
    <li @if (Request::is("subject/$tag->id")) class="active" @endif class="hidden-xs hidden-sm">
        <a href="/subject/{{$tag->id}}" class="nav-font">{{$tag->name}}</a>
    </li>
@endforeach

@for( $i = 0; $i < count($tags); $i++)
    <li class="visible-xs visible-sm">
        <a href="/subject/{{$tags[$i]->id}}" class="nav-font">
		@if($i == '0')
        <span class="imgicon"><img src="/assets/image/nsp0.png" class="img-responsive"></span>
		@elseif($i == '1')
		<span class="imgicon"><img src="/assets/image/nsp1.png" class="img-responsive"></span>
		@elseif($i == '2')
		<span class="imgicon"><img src="/assets/image/nsp2.png" class="img-responsive"></span>
		@elseif($i == '3')
		<span class="imgicon"><img src="/assets/image/nsp3.png" class="img-responsive"></span>
		@elseif($i == '4')
		<span class="imgicon"><img src="/assets/image/nsp4.png" class="img-responsive"></span>
		@elseif($i == '5')
		<span class="imgicon"><img src="/assets/image/nsp5.png" class="img-responsive"></span>
		@elseif($i == '6')
		<span class="imgicon"><img src="/assets/image/nsp6.png" class="img-responsive"></span>
		@elseif($i == '7')
		<span class="imgicon"><img src="/assets/image/nsp7.png" class="img-responsive"></span>
		@elseif($i == '8')
		<span class="imgicon"><img src="/assets/image/nsp8.png" class="img-responsive"></span>
		@elseif($i == '9')
		<span class="imgicon"><img src="/assets/image/nsp9.png" class="img-responsive"></span>
		@elseif($i == '10')
		<span class="imgicon"><img src="/assets/image/nsp10.png" class="img-responsive"></span>
		@else
		<span class="imgicon"><img src="/assets/image/nsp.png" class="img-responsive"></span>
		@endif
        {{$tags[$i]->name}}</a>
    </li>
@endfor