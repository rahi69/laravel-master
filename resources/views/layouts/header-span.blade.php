@section('css')
    <link rel="stylesheet" href="../dist/css/swiper.min.css">
@stop
<div class="row home-row">
    {{-------------------------------------------------------------------------------}}
    {{--span12 (Children)--}}
    <header class="span12 pages-header-row"><a class="button button-teal" href="/category/fiction">See More</a> <h2><i>Our Best Childern Books</i></h2></header>
    <div class="span12"><!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                @foreach($child_books as $child_book)

                    <div class="swiper-slide book-preview"
                         data-carousel-position="0"
                         data-isbn="9781784708030"
                         data-productid="8870130"
                         data-preorder="0"
                         data-buy="1"
                         data-cnc="1"
                    >

                        <div title="{{$child_book->name}}">
                            <div class="image-wrap">
                                <div class="image-container">
                                    @if(empty($child_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        {{--<a href="/book/the-western-wind/samantha-harvey/9781784708030">--}}
                                        {{--<a href="/book/{{$child_book->name}}/{{$child_book->id}}">--}}
                                        <a href="/book/{{$child_book->id}}">

                                        {{--<img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/5098/9781509858637.jpg" alt="This is Going to Hurt" class="swiper-lazy" onerror="this.src='/images/cover404.png'">--}}

                                            <img src="{{$upload}}/{{$child_book->photos[0]->file}}"  alt="{{$child_book->name}}">
                                            @endif
                                            {{--<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                </div>
                                <div class="first-click-overlay"></div>
                                <div class="hover-layer">
                                    <div class="hover-item"></div>
                                </div>
                            </div>
                            <div class="info-wrap">

                                <div class="title-wrap">
                                    <a href="/book/the-western-wind/samantha-harvey/9781784708030" class="title link-invert">{{$child_book->name}}</a>
                                </div>
                                <div class="author-wrap">

                                    <span class="authors"><a href="/book/the-western-wind/samantha-harvey/9781784708030" class="text-gold"><b>{{$child_book->author}}</b></a> </span>

                                </div>
                                <div class="book-price">
                                    <div>

                                        <span class="price-rrp" >£8.99</span>
                                        <span class="price">&nbsp;&nbsp;{{$child_book->price}}</span>

                                    </div>
                                    @if($child_book->category_id == 3)
                                        <span class="format">
                                    کتاب گویا
                                </span>
                                    @else
                                        <span class="format">
                                    کتاب الکترونیکی
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        {{--{{$child_books->render()}}--}}
        <!-- Navigation -->
            <div class="swiper-button-next swiper-button-black" ></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
        <hr style="margin-top: 30px;" /></div>
    {{-------------------------------------------------------------------------------}}
    {{--span12 (Novel)--}}
    <header class="span12 pages-header-row"><a class="button button-teal" href="/category/fiction">See More</a> <h2><i>Our Best Novel Books</i></h2></header>
    <div class="span12"><!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                @foreach($novel_books as $novel_book)

                    <div class="swiper-slide book-preview"
                         data-carousel-position="0"
                         data-isbn="9781784708030"
                         data-productid="8870130"
                         data-preorder="0"
                         data-buy="1"
                         data-cnc="1"
                    >

                        <div title="{{$novel_book->name}}">
                            <div class="image-wrap">
                                <div class="image-container">
                                    @if(empty($novel_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        {{--<a href="/book/the-western-wind/samantha-harvey/9781784708030">--}}
                                        {{--<a href="/book/{{$novel_book->name}}/{{$novel_book->id}}">--}}
                                            <a href="/book/{{$novel_book->id}}">


                                            {{--<img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/5098/9781509858637.jpg" alt="This is Going to Hurt" class="swiper-lazy" onerror="this.src='/images/cover404.png'">--}}

                                            <img src="{{$upload}}/{{$novel_book->photos[0]->file}}"  alt="{{$novel_book->name}}">
                                            @endif
                                            {{--<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                </div>
                                <div class="first-click-overlay"></div>
                                <div class="hover-layer">
                                    <div class="hover-item"></div>
                                </div>
                            </div>
                            <div class="info-wrap">

                                <div class="title-wrap">
                                    <a href="/book/the-western-wind/samantha-harvey/9781784708030" class="title link-invert">{{$novel_book->name}}</a>
                                </div>
                                <div class="author-wrap">

                                    <span class="authors"><a href="/book/the-western-wind/samantha-harvey/9781784708030" class="text-gold"><b>{{$novel_book->author}}</b></a> </span>

                                </div>
                                <div class="book-price">
                                    <div>

                                        <span class="price-rrp" >£8.99</span>
                                        <span class="price">&nbsp;&nbsp;{{$novel_book->price}}</span>

                                    </div>
                                    @if($novel_book->category_id == 5)
                                        <span class="format">
                                    کتاب گویا
                                </span>
                                    @else
                                        <span class="format">
                                    کتاب الکترونیکی
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <!-- Navigation -->
            <div class="swiper-button-next swiper-button-black" ></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
        <hr style="margin-top: 30px;" /></div>
    {{--END span12 (Novel)--}}
    {{-------------------------------------------------------------------------------}}
    {{--span12 (Psychology)--}}
    <header class="span12 pages-header-row"><a class="button button-teal" href="/category/fiction">See More</a> <h2><i>Our Best Psychology Books</i></h2></header>
    <div class="span12"><!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                @foreach($psychology_books as $psychology_book)

                    <div class="swiper-slide book-preview"
                         data-carousel-position="0"
                         data-isbn="9781784708030"
                         data-productid="8870130"
                         data-preorder="0"
                         data-buy="1"
                         data-cnc="1"
                    >

                        <div title="{{$psychology_book->name}}">
                            <div class="image-wrap">
                                <div class="image-container">
                                    @if(empty($psychology_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        {{--<a href="/book/the-western-wind/samantha-harvey/9781784708030">--}}
                                        {{--<a href="/book/{{$psychology_book->name}}/{{$psychology_book->id}}">--}}
                                        <a href="/book/{{$psychology_book->id}}">

                                        {{--<img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/5098/9781509858637.jpg" alt="This is Going to Hurt" class="swiper-lazy" onerror="this.src='/images/cover404.png'">--}}

                                            <img src="{{$upload}}/{{$psychology_book->photos[0]->file}}"  alt="{{$psychology_book->name}}">
                                            @endif
                                            {{--<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                </div>
                                <div class="first-click-overlay"></div>
                                <div class="hover-layer">
                                    <div class="hover-item"></div>
                                </div>
                            </div>
                            <div class="info-wrap">

                                <div class="title-wrap">
                                    <a href="/book/the-western-wind/samantha-harvey/9781784708030" class="title link-invert">{{$psychology_book->name}}</a>
                                </div>
                                <div class="author-wrap">

                                    <span class="authors"><a href="/book/the-western-wind/samantha-harvey/9781784708030" class="text-gold"><b>{{$psychology_book->author}}</b></a> </span>

                                </div>
                                <div class="book-price">
                                    <div>

                                        <span class="price-rrp" >£8.99</span>
                                        <span class="price">&nbsp;&nbsp;{{$psychology_book->price}}</span>

                                    </div>
                                    @if($psychology_book->category_id == 5)
                                        <span class="format">
                                    کتاب گویا
                                </span>
                                    @else
                                        <span class="format">
                                    کتاب الکترونیکی
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <!-- Navigation -->
            <div class="swiper-button-next swiper-button-black" ></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
        <hr style="margin-top: 30px;" /></div>
    {{--END span12 (Psychology)--}}
    {{-------------------------------------------------------------------------------}}
    {{--span12 (Poetry)--}}
    <header class="span12 pages-header-row"><a class="button button-teal" href="/category/fiction">See More</a> <h2><i>Our Best Poetry Books</i></h2></header>
    <div class="span12"><!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                @foreach($poetry_books as $poetry_book)

                    <div class="swiper-slide book-preview"
                         data-carousel-position="0"
                         data-isbn="9781784708030"
                         data-productid="8870130"
                         data-preorder="0"
                         data-buy="1"
                         data-cnc="1"
                    >

                        <div title="{{$poetry_book->name}}">
                            <div class="image-wrap">
                                <div class="image-container">
                                    @if(empty($poetry_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        {{--<a href="/book/the-western-wind/samantha-harvey/9781784708030">--}}
                                            {{--<a href="/book/{{$poetry_book->name}}/{{$poetry_book->id}}">--}}
                                        <a href="/book/{{$poetry_book->id}}">

                                            {{--<img src='/images/cover404.png' data-src="https://cdn.waterstones.com/override/v3/large/9781/5098/9781509858637.jpg" alt="This is Going to Hurt" class="swiper-lazy" onerror="this.src='/images/cover404.png'">--}}

                                            <img src="{{$upload}}/{{$poetry_book->photos[0]->file}}"  alt="{{$poetry_book->name}}">
                                            @endif
                                            {{--<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                </div>
                                <div class="first-click-overlay"></div>
                                <div class="hover-layer">
                                    <div class="hover-item"></div>
                                </div>
                            </div>
                            <div class="info-wrap">

                                <div class="title-wrap">
                                    <a href="/book/the-western-wind/samantha-harvey/9781784708030" class="title link-invert">{{$poetry_book->name}}</a>
                                </div>
                                <div class="author-wrap">

                                    <span class="authors"><a href="/book/the-western-wind/samantha-harvey/9781784708030" class="text-gold"><b>{{$poetry_book->author}}</b></a> </span>

                                </div>
                                <div class="book-price">
                                    <div>

                                        <span class="price-rrp" >£8.99</span>
                                        <span class="price">&nbsp;&nbsp;{{$poetry_book->price}}</span>

                                    </div>
                                    @if($poetry_book->category_id == 5)
                                        <span class="format">
                                    کتاب گویا
                                </span>
                                    @else
                                        <span class="format">
                                    کتاب الکترونیکی
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <!-- Navigation -->
            <div class="swiper-button-next swiper-button-black" ></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
        <hr style="margin-top: 30px;" /></div>
    {{--END span12 (Poetry)--}}
    {{-------------------------------------------------------------------------------}}
    {{--span12 (Scientific)--}}
    <header class="span12 pages-header-row"><a class="button button-teal" href="/category/fiction">See More</a> <h2><i>Our Best Scientific Books</i></h2></header>
    <div class="span12"><!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                @foreach($scientific_books as $scientific_book)

                    <div class="swiper-slide book-preview"
                         data-carousel-position="0"
                         data-isbn="9781784708030"
                         data-productid="8870130"
                         data-preorder="0"
                         data-buy="1"
                         data-cnc="1"
                    >

                        <div title="{{$scientific_book->name}}">
                            <div class="image-wrap">
                                <div class="image-container">
                                    @if(empty($scientific_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        {{--<a href="/book/the-western-wind/samantha-harvey/9781784708030">--}}
                                        {{--<a href="/book/{{$scientific_book->name}}/{{$scientific_book->id}}">--}}
                                        <a href="/book/{{$scientific_book->id}}">

                                            <img src="{{$upload}}/{{$scientific_book->photos[0]->file}}"  alt="{{$scientific_book->name}}">
                                            @endif
                                            {{--<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
                                        </a>
                                        <div class="added-basket">
                                            <div>
                                                <i class="icon-tick sprite-icon"></i>
                                                <span>Added to basket</span>
                                            </div>
                                        </div>
                                </div>
                                <div class="first-click-overlay"></div>
                                <div class="hover-layer">
                                    <div class="hover-item"></div>
                                </div>
                            </div>
                            <div class="info-wrap">

                                <div class="title-wrap">
                                    <a href="/book/the-western-wind/samantha-harvey/9781784708030" class="title link-invert">{{$scientific_book->name}}</a>
                                </div>
                                <div class="author-wrap">

                                    <span class="authors"><a href="/book/the-western-wind/samantha-harvey/9781784708030" class="text-gold"><b>{{$scientific_book->author}}</b></a> </span>

                                </div>
                                <div class="book-price">
                                    <div>

                                        <span class="price-rrp" >£8.99</span>
                                        <span class="price">&nbsp;&nbsp;{{$scientific_book->price}}</span>

                                    </div>
                                    @if($scientific_book->category_id == 5)
                                        <span class="format">
                                    کتاب گویا
                                </span>
                                    @else
                                        <span class="format">
                                    کتاب الکترونیکی
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <!-- Navigation -->
            <div class="swiper-button-next swiper-button-black" ></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
        <hr style="margin-top: 30px;" /></div>
    {{--END span12 (Scientific)--}}
    {{-------------------------------------------------------------------------------}}
</div>
@section('js')
    <script src={{url("../../../dist/js/swiper.min.js")}}></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

@stop