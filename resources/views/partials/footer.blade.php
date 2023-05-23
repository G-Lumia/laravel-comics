<footer>
    <div class="foot d-flex align-items-center">
        <div class="container links d-flex gap-5 justify-content-start py-3">
            @foreach ($footerLinks as $foots)
            <div>
                <h1 class="py-3">
                    {{$foots['title']}}
                </h1>
                <div class="d-flex flex-column justify-content-between gap-1">
                    @foreach ($links as $link)
                        <a href="#">
                            {{$link['title']}}
                        </a>
                    @endforeach
                </div>
            </div>
            @endforeach
    </div>
</footer>
