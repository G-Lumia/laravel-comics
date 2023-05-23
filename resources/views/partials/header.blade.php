<header class="d-flex container justify-content-between align-items-center my-0">
      <img src="{{URL::asset('/images/dc-logo.png')}}" alt="dc logo">
      <div class="d-flex gap-5">
        @foreach ($links as $link)
            <a href={{$link['url']}}> {{$link['title']}} </a>
        @endforeach
      </div>
</header>
