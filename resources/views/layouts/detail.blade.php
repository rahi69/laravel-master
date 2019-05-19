<!DOCTYPE html>

<html class="no-js no-touch front-page" lang="en">
@include('layouts.head')
<body class=" ">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N66L6Q"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="main-container">
    @include('layouts.header')

    {{--<script src={{url("../../../js/jquery.js")}}></script>--}}

    @include('layouts.script3')

    <div class="main-page row">



        <div itemscope="" itemtype="http://schema.org/Book">
            <link itemprop="additionalType" href="http://schema.org/Product">
            <section class="book-detail span12 alpha omega">
                <div class="book-image span5 mobile-span12 text-center">
                    <div class="preview-flip-container">

                        <div class="book-image-outer">
                            <div class="book-image-wrap">
                                <div class="book-image-main">
                                    {{--<img itemprop="image" id="scope_book_image" src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785176203.jpg" data-zoom-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785176203.jpg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)">--}}
                                    <img itemprop="image" id="scope_book_image" src="{{$upload}}/{{$book->photos[0]->file}}" data-zoom-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785176203.jpg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)">

                                    <ul class="inner">
                                        <li><img src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785176203.jpg" data-zoom-src="https://cdn.waterstones.com/override/v1/large/9781/7851/9781785176203.jpg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)"></li>
                                    </ul>

                                    <div class="button-book-zoom icon js-open-modal" data-modal-id="zoomModal">zoom</div>
                                </div>

                                <div class="additional-images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="book-image-thumbs carousel">
                        <div class="wrapper">
                            <div class="inner clearfix">
                                <div class="book-thumb">
                                    <div class="book-thumb-inner" data-index="-1">
                                        <img src="https://cdn.waterstones.com/override/v1/small/9781/7851/9781785176203.jpg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)" />
                                    </div>
                                </div>
                                <div class="book-thumb">
                                    <div class="book-thumb-inner" data-index="0">
                                        <img src="https://cdn.waterstones.com/images/00128228-70x70.jpeg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)" />
                                    </div>
                                </div>
                                <div class="book-thumb">
                                    <div class="book-thumb-inner" data-index="1">
                                        <img src="https://cdn.waterstones.com/images/00128227-70x70.jpeg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)" />
                                    </div>
                                </div>
                                <div class="book-thumb">
                                    <div class="book-thumb-inner" data-index="2">
                                        <img src="https://cdn.waterstones.com/images/00128229-70x70.jpeg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)" />
                                    </div>
                                </div>
                                <div class="book-thumb">
                                    <div class="book-thumb-inner" data-index="3">
                                        <img src="https://cdn.waterstones.com/images/00128308-70x70.jpeg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)" />
                                    </div>
                                </div>
                                <div class="book-thumb">
                                    <div class="book-thumb-inner" data-index="4">
                                        <img src="https://cdn.waterstones.com/images/00128309-70x70.jpeg" alt="Underland: A Deep Time Journey - Signed Edition (Hardback)" onerror="imgError(this)" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-control carousel-control-small next"></div>
                        <div class="carousel-control carousel-control-small prev"></div>
                    </div>

                </div>

                <div class="span7 mobile-span12 alpha tablet-alpha">
                    <div class="book-info">


                        <a href="/campaign/special-editions" class="product-sticker" style="background-image: url(https://cdn.waterstones.com/images/00048236-70x70.png);">
                            <div class="product-sticker-hover" style="background-image: url(https://cdn.waterstones.com/images/00048237-70x70.png);"></div>
                        </a>

                        <h1 class="title"><span class="book-title" itemprop="name" id="scope_book_title">{{$book->name}}: A Deep Time Journey {{($book->category_id == 3 || $book->category_id==4 || $book->category_id==5 || $book->category_id==6) ? '(voice)' : '(ebook)'}}</span></h1>

                            <span class="contributors">
                                <a href="/author/robert-macfarlane/172313" class="text-gold"><b><span itemprop="author">{{$book->author}}</span></b></a><span class="text-grey"> (author)</span><br>
                                @if($book->category_id == 3 || $book->category_id==4 || $book->category_id==5 || $book->category_id==6)
                                    <a href="/author/robert-macfarlane/172313" class="text-gold"><b><span itemprop="author">{{$book->speaker}}</span></b></a><span class="text-grey"> (narrator)</span>
                                    @endif
                            </span>

                        </span>
                        <div class="rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" id="scope_product_rating">


                            <div class="star-rating">
                                <span class="star-icon full">★</span>
                                <span class="star-icon full">★</span>
                                <span class="star-icon full">★</span>
                                <span class="star-icon full">★</span>
                                <span class="star-icon full">★</span>
                            </div>


                            <a class="reviews-trigger" href="#reviews">1 Review</a>

                            <a href="#" data-modal-id="loginModal" data-hash="write-review" class="write-review-trigger icon-pencil js-open-modal">Sign in to write a review</a>
                            <meta itemprop="ratingValue" content="5">
                            <meta itemprop="reviewCount" content="1">
                        </div>
                    </div><!-- /book-info -->



                    <div class="book-actions">
                        <div class="buy-container ">


                            <div class="formats-list">
                                <div class="book-format clearfix">

                                    <div class="price">
                                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                            <b itemprop="price">${{$book->price}}</b>
                                            <meta itemprop="availability" content="In stock">
                                        </div>
                                    </div>

                                    <div class="info">
		<span class="name" itemprop="bookFormat">
			{{($book->category_id == 3 || $book->category_id==4 || $book->category_id==5 || $book->category_id==6) ? '(voice)' : '(ebook)'}}
					</span>
                                        <span class="subtitle">
							 <span itemprop="numberOfPages">496</span> Pages /

			Published: <meta itemprop="datePublished" content="2019-05-02"><strong>02/05/2019</strong>		</span>
                                    </div>

                                </div>							</div>


                            <form action="/checkout/setbasketitemqty" method="post" class="basket-form">
                                <div class="pre-add buy-inner">
                                    <div class="button-container">
                                        <input type="hidden" name="mode" value="add">
                                        <input type="hidden" name="productid" value="9518368">
                                        <input type="hidden" name="redirect" value="/book/underland/robert-macfarlane/9781785176203">

                                        <label>Quantity</label>
                                        <input type="tel" name="quantity" maxlength="3" value="1" class="input quantity">

                                        <button type="submit" class="button button-teal button-buy">Add to basket</button>
                                    </div>
                                </div>


                                <div class="post-add buy-inner text-center">
                                    <ul class="perk-list">
                                        <li class="feature-good">This item has been added to your basket</li>
                                    </ul>
                                    <div class="button-container">
                                        <a href="/checkout/basket" class="button button-gold">View basket</a>
                                        <a href="/checkout/basket" class="button button-teal">Checkout</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>



                    <script type="text/javascript">

                        $(function(){
                            $(".collect-form:not(.has-shop)").on("submit.getGeo",function(){
                                var $thisForm = $(this);
                                if($thisForm.has('.get-location-button').length && $thisForm.find("[name=lat]").val() !== '' && $thisForm.find("[name=lng]").val() !== '') {

                                    $thisForm.off("submit.getGeo").submit();
                                } else {
                                    var geocoder = new google.maps.Geocoder();
                                    var searchBounds = new google.maps.LatLngBounds(
                                        new google.maps.LatLng(49.439556958940855, -11.77734375),
                                        new google.maps.LatLng(59.512029386502704, 7.470703125));
                                    geocoder.geocode({'address': $thisForm.find("[name=search]").val() + ', Europe', bounds: searchBounds, 'region': 'EU'},function(results,status){
                                        if(results.length > 0) {
                                            $thisForm.find("[name=lat]").val(results[0].geometry.location.lat());
                                            $thisForm.find("[name=lng]").val(results[0].geometry.location.lng());
                                        }
                                        $thisForm.off("submit.getGeo").submit();
                                    });
                                    return false;
                                }
                            });

                            $(".book-detail-cnc-switch").on("click",function() {
                                $(".book-detail-cnc-postcode").show();
                                $(".book-detail-cnc-saved").hide();
                            });
                        });

                    </script>

                    <div class="top-bar email-share">
                        <div class="action-icon action-share-container">
                            <div class="share-array">
                                <a href="http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.waterstones.com%2Fbook%2Funderland%2Frobert-macfarlane%2F9781785176203" class="icon-facebook" target="_blank" title="Facebook"></a>
                                <a href="http://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.waterstones.com%2Fbook%2Funderland%2Frobert-macfarlane%2F9781785176203&amp;text=Underland%20by%20Robert%20Macfarlane%20%7C%20Waterstones" class="icon-twitter" target="_blank" title="Twitter"></a>
                                <a href="http://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fcdn.waterstones.com%2Foverride%2Fv1%2Flarge%2F9781%2F7851%2F9781785176203.jpg&amp;description=Underland%20by%20Robert%20Macfarlane%20%7C%20Waterstones" class="icon-pinterest" target="_blank" title="Pinterest"></a>
                                <a href="https://plus.google.com/share?url=https%3A%2F%2Fwww.waterstones.com%2Fbook%2Funderland%2Frobert-macfarlane%2F9781785176203" class="icon-googleplus" target="_blank" title="Google+"></a>
                            </div>

                            <div class="hover-layer"></div>

                            <a class="action-icon icon-share" title="Share"></a>

                        </div>

                        <a href="#" onclick="return false;" class="action-icon icon-heart no-user init tooltipstered"></a>
                    </div>


                    <div class="book-detail book-format" style="border:0px; width:100%; text-align:left; margin-left:0px; padding-left:0px; padding-right:0px; font-size:17px;">
						<span class="stock-message" style="display:inline;">
							<a href="/books/search/term/underland+robert+macfarlane" rel="nofollow">View other formats and editions</a>
						</span>
                    </div>
                    <div style="clear:both;"></div>

                </div>
            </section>

            <section class="book-info-tabs ws-tabs span12">
                <div class="tabs-header">
                    <a class="" data-tab="synopsis">Synopsis</a><div class="tab-content content-text tab-content-synopsis" data-tab="synopsis">
                        <div class="two-columns">
                            <div class="pdp-waterstones-says">
                                <img class="logo-waterstones-says" src="https://static.waterstones.com/1.6.17/img/waterstones-says.png" alt="Waterstones Says">
                                <div class="clearfix"></div>
                                <p>From the high peaks of&nbsp;<a href="https://www.waterstones.com/book/mountains-of-the-mind/robert-macfarlane/9781783784509"><em>Mountains of the Mind</em></a>&nbsp;to the lost paths of&nbsp;<a href="https://www.waterstones.com/book/the-old-ways/robert-macfarlane/9780141030586"><em>The Old Ways</em></a>&nbsp;and the vanishing lexicon of&nbsp;<a href="https://www.waterstones.com/book/the-lost-words/robert-macfarlane/jackie-morris/9780241253588"><em>The Lost Words</em></a>, Robert Macfarlane has traced the way our landscape is fused with language, storytelling and imagination.&nbsp;Ten years in the making, U<em>nderland</em>&nbsp;is his enthralling record of journeys deep into the worlds beneath our feet. From the burial grounds of the Mendip Hills to the hidden catacombs of Paris, and further, to the deep blue, ancient ice of Greenland, Macfarlane explores - through myth, memory and experience – our most feared and venerated spaces of loss, discovery and deep time. Written with lyricism, power and prescience,&nbsp;<em>Underland</em>&nbsp;brings together the ancient and the urgent in a revelatory examination of an unseen and essential netherworld.</p>
                            </div>

                            <div itemprop="description" id="scope_book_description">
                                <p><strong>Signed Edition</strong><br><br></p>
                                <p>The highly anticipated new book from the internationally bestselling, prize-winning author of <a href="/book/landmarks/robert-macfarlane/9780241967874"><em>Landmarks</em></a>, <a href="/book/the-lost-words/robert-macfarlane/jackie-morris/9780241253588"><em>The Lost Words</em></a> and <a href="/book/the-old-ways/robert-macfarlane/9780141030586"><em>The Old Ways</em></a>.</p>
                                <p>In <em>Underland</em>, Robert Macfarlane takes us on a journey into the sometimes vast and hidden worlds beneath our feet. From the ice-blue depths of Greenland's glaciers, to the underground networks by which trees communicate, from Bronze Age burial chambers to the rock art of remote Arctic sea-caves, this is a deep-time voyage into the planet's past and future.</p>
                                <p>Global in its geography, gripping in its voice and haunting in its implications, <em>Underland</em> is a work of huge range and power, and a remarkable new chapter in Macfarlane's long-term exploration of landscape and the human heart.</p>
                            </div>

                            <p class="spec">
                                <i>Publisher: <span itemprop="publisher">Penguin Books Ltd</span></i>
                                <br>
                                <i>ISBN: <span itemprop="isbn">9781785176203</span></i>
                                <br>
                                <i>Number of pages: <span itemprop="numberOfPages">496</span></i>
                                <br>
                                <i>Dimensions: <span><span itemprop="height">234</span> x <span itemprop="width">153</span> mm</span></i>
                            </p>
                        </div>
                        <hr>
                        <span style="font-family: 'Source Sans Pro', Arial, sans-serif; font-size: 22px; font-style: italic;font-weight: bold; color: rgb(51, 107, 117)">MEDIA REVIEWS</span>
                        <div class="show-desc">
                            <p>'Macfarlane has invented a new kind of book, really a new genre entirely' - <em>The Irish Times</em></p>
                            <p>'He is the great nature writer, and nature poet, of this generation' - <em>The Wall Street Journal</em></p>
                            <p>'Macfarlane has shown how utterly beautiful a brilliantly written travel book can still be' -<em> The Observer</em> on <em>The Old Ways</em></p>
                            <p>'Irradiated by a profound sense of wonder... Few books give such a sense of enchantment; it is a book to give to many, and to return to repeatedly' Independent onLandmarks 'It sets the imagination tingling...like reading a prose Odyssey sprinkled with imagist poems' - <em>The Sunday Times</em> on <em>The Old Ways</em></p>
                        </div>
                    </div>
                    <a data-tab="author" class="active">Author</a><div class="tab-content tab-content-author active" data-tab="author">
                        <div class="author-preview">
                            <h4 itemprop="author" id="scope_book_author">Robert Macfarlane</h4>
                            <div class="author-preview-details">
                                <p></p><p>{{$book->about_author}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-content-container clearfix">
                    <div class="tab-content content-text tab-content-synopsis" data-tab="synopsis">
                        <div class="two-columns">
                            <div class="pdp-waterstones-says">
                                <img class="logo-waterstones-says" src="https://static.waterstones.com/1.6.17/img/waterstones-says.png" alt="Waterstones Says">
                                <div class="clearfix"></div>
                                <p>{{$book->description}}</p>
                            </div>

                            {{--<div itemprop="description" id="scope_book_description">--}}
                                {{--<p><strong>Signed Edition</strong><br><br></p>--}}
                                {{--<p>The highly anticipated new book from the internationally bestselling, prize-winning author of <a href="/book/landmarks/robert-macfarlane/9780241967874"><em>Landmarks</em></a>, <a href="/book/the-lost-words/robert-macfarlane/jackie-morris/9780241253588"><em>The Lost Words</em></a> and <a href="/book/the-old-ways/robert-macfarlane/9780141030586"><em>The Old Ways</em></a>.</p>--}}
                                {{--<p>In <em>Underland</em>, Robert Macfarlane takes us on a journey into the sometimes vast and hidden worlds beneath our feet. From the ice-blue depths of Greenland's glaciers, to the underground networks by which trees communicate, from Bronze Age burial chambers to the rock art of remote Arctic sea-caves, this is a deep-time voyage into the planet's past and future.</p>--}}
                                {{--<p>Global in its geography, gripping in its voice and haunting in its implications, <em>Underland</em> is a work of huge range and power, and a remarkable new chapter in Macfarlane's long-term exploration of landscape and the human heart.</p>--}}
                            {{--</div>--}}
                            <div itemprop="description" id="scope_book_description">

                            <p class="spec">
                                <i>Publisher: <span itemprop="publisher">{{$book->publisher}}</span></i>
                                <br>
                                <i>ISBN: <span itemprop="isbn">{{$book->isbn}}</span></i>
                                <br>

                                <i>Number of pages: <span itemprop="numberOfPages">{{$book->time}}</span></i>
                            </p>
                            </div>
                        </div>
                        <hr>
                        {{--<span style="font-family: 'Source Sans Pro', Arial, sans-serif; font-size: 22px; font-style: italic;font-weight: bold; color: rgb(51, 107, 117)">MEDIA REVIEWS</span>--}}
                        {{--<div class="show-desc show-container show-more" style="height: 124px;">--}}
                            {{--<p>'Macfarlane has invented a new kind of book, really a new genre entirely' - <em>The Irish Times</em></p>--}}
                            {{--<p>'He is the great nature writer, and nature poet, of this generation' - <em>The Wall Street Journal</em></p>--}}
                            {{--<p>'Macfarlane has shown how utterly beautiful a brilliantly written travel book can still be' -<em> The Observer</em> on <em>The Old Ways</em></p>--}}
                            {{--<p>'Irradiated by a profound sense of wonder... Few books give such a sense of enchantment; it is a book to give to many, and to return to repeatedly' Independent onLandmarks 'It sets the imagination tingling...like reading a prose Odyssey sprinkled with imagist poems' - <em>The Sunday Times</em> on <em>The Old Ways</em></p>--}}
                            {{--<div class="show-button">Show more</div></div>--}}
                    </div>
                    <div class="tab-content tab-content-author active" data-tab="author">
                        <div class="author-preview">
                            <h4 itemprop="author" id="scope_book_author">{{$book->author}}</h4>
                            <div class="author-preview-details">
<p>{{$book->about_author}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


            <section class="book-recommends mobile-section span12">
                <h2 class="heading-fg">You may also be interested in...</h2>
                <!-- Swiper -->
                <div class="swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide book-preview swiper-slide-active" data-carousel-position="0" data-isbn="9781784162436" data-productid="8827830" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="The Wood">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-wood/john-lewis-stempel/9781784162436">
                                            <img src="https://cdn.waterstones.com/bookjackets/large/9781/7841/9781784162436.jpg" alt="The Wood" class="swiper-lazy swiper-lazy-loaded" onerror="this.src='/images/cover404.png'">

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
                                        <a href="/book/the-wood/john-lewis-stempel/9781784162436" class="title link-invert">The Wood</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-wood/john-lewis-stempel/9781784162436" class="text-gold"><b>John Lewis-Stempel</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp">£8.99</span>
                                            <span class="price">&nbsp;&nbsp;£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview swiper-slide-next" data-carousel-position="1" data-isbn="9781786076007" data-productid="8996357" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="The Way Home">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-way-home/mark-boyle/9781786076007">
                                            <img src="https://cdn.waterstones.com/bookjackets/large/9781/7860/9781786076007.jpg" alt="The Way Home" class="swiper-lazy swiper-lazy-loaded" onerror="this.src='/images/cover404.png'">

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
                                        <a href="/book/the-way-home/mark-boyle/9781786076007" class="title link-invert">The Way Home</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-way-home/mark-boyle/9781786076007" class="text-gold"><b>Mark Boyle</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="2" data-isbn="9781785943539" data-productid="8797122" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="Earth from Space">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/earth-from-space/michael-bright/chloe-sarosh/9781785943539">
                                            <img src="https://cdn.waterstones.com/override/v1/large/9781/7859/9781785943539.jpg" alt="Earth from Space" class="swiper-lazy swiper-lazy-loaded" onerror="this.src='/images/cover404.png'">

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
                                        <div class="hover-item"><form class="basket-form" method="post" action="/checkout/setbasketitemqty"><div class="pre-add"><input type="hidden" name="mode" value="add" tabindex="0"><input type="hidden" name="productid" value="8797122" tabindex="0"><input type="hidden" name="quantity" value="1" tabindex="0"><input type="hidden" name="redirect" value="/" tabindex="0"><button class="button-buy button button-teal button-small" type="submit" tabindex="0">Add to Basket</button><button class="button button-gold button-small js-open-modal" tabindex="0" data-modal-id="collectModal" data-isbn="9781785943539">Click <span class="light">&amp;</span> Collect</button></div><div class="post-add" style="display:none;"><a class="button button-gold button-basket button-small" href="/checkout/basket">View basket</a><a class="button button-teal button-basket button-small" href="/checkout/basket">Checkout</a></div></form></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/earth-from-space/michael-bright/chloe-sarosh/9781785943539" class="title link-invert">Earth from Space</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/earth-from-space/michael-bright/chloe-sarosh/9781785943539" class="text-gold"><b>Michael Bright</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp">£25.00</span>
                                            <span class="price">&nbsp;&nbsp;£21.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="3" data-isbn="9781785785115" data-productid="9013923" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="Buzz">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/buzz/thor-hanson/9781785785115">
                                            <img src="https://cdn.waterstones.com/bookjackets/large/9781/7857/9781785785115.jpg" alt="Buzz" class="swiper-lazy swiper-lazy-loaded" onerror="this.src='/images/cover404.png'">

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
                                        <div class="hover-item"><form class="basket-form" method="post" action="/checkout/setbasketitemqty"><div class="pre-add"><input type="hidden" name="mode" value="add" tabindex="0"><input type="hidden" name="productid" value="9013923" tabindex="0"><input type="hidden" name="quantity" value="1" tabindex="0"><input type="hidden" name="redirect" value="/" tabindex="0"><button class="button-buy button button-teal button-small" type="submit" tabindex="0">Add to Basket</button><button class="button button-gold button-small js-open-modal" tabindex="0" data-modal-id="collectModal" data-isbn="9781785785115">Click <span class="light">&amp;</span> Collect</button></div><div class="post-add" style="display:none;"><a class="button button-gold button-basket button-small" href="/checkout/basket">View basket</a><a class="button button-teal button-basket button-small" href="/checkout/basket">Checkout</a></div></form></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/buzz/thor-hanson/9781785785115" class="title link-invert">Buzz</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/buzz/thor-hanson/9781785785115" class="text-gold"><b>Thor Hanson</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£9.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="4" data-isbn="9780008165703" data-productid="8171535" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="The Seabird's Cry">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-seabirds-cry/adam-nicolson/9780008165703">
                                            <img src="https://cdn.waterstones.com/bookjackets/large/9780/0081/9780008165703.jpg" alt="The Seabird's Cry" class="swiper-lazy swiper-lazy-loaded" onerror="this.src='/images/cover404.png'">

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
                                        <div class="hover-item"><form class="basket-form" method="post" action="/checkout/setbasketitemqty"><div class="pre-add"><input type="hidden" name="mode" value="add" tabindex="0"><input type="hidden" name="productid" value="8171535" tabindex="0"><input type="hidden" name="quantity" value="1" tabindex="0"><input type="hidden" name="redirect" value="/" tabindex="0"><button class="button-buy button button-teal button-small" type="submit" tabindex="0">Add to Basket</button><button class="button button-gold button-small js-open-modal" tabindex="0" data-modal-id="collectModal" data-isbn="9780008165703">Click <span class="light">&amp;</span> Collect</button></div><div class="post-add" style="display:none;"><a class="button button-gold button-basket button-small" href="/checkout/basket">View basket</a><a class="button button-teal button-basket button-small" href="/checkout/basket">Checkout</a></div></form></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-seabirds-cry/adam-nicolson/9780008165703" class="title link-invert">The Seabird's Cry</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-seabirds-cry/adam-nicolson/9780008165703" class="text-gold"><b>Adam Nicolson</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£9.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="5" data-isbn="9781509830091" data-productid="9394521" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="The Rise and Fall of the Dinosaurs">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-rise-and-fall-of-the-dinosaurs/steve-brusatte/9781509830091">
                                            <img src="https://cdn.waterstones.com/bookjackets/large/9781/5098/9781509830091.jpg" alt="The Rise and Fall of the Dinosaurs" class="swiper-lazy swiper-lazy-loaded" onerror="this.src='/images/cover404.png'">

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
                                        <div class="hover-item"><form class="basket-form" method="post" action="/checkout/setbasketitemqty"><div class="pre-add"><input type="hidden" name="mode" value="add" tabindex="0"><input type="hidden" name="productid" value="9394521" tabindex="0"><input type="hidden" name="quantity" value="1" tabindex="0"><input type="hidden" name="redirect" value="/" tabindex="0"><button class="button-buy button button-teal button-small" type="submit" tabindex="0">Add to Basket</button><button class="button button-gold button-small js-open-modal" tabindex="0" data-modal-id="collectModal" data-isbn="9781509830091">Click <span class="light">&amp;</span> Collect</button></div><div class="post-add" style="display:none;"><a class="button button-gold button-basket button-small" href="/checkout/basket">View basket</a><a class="button button-teal button-basket button-small" href="/checkout/basket">Checkout</a></div></form></div>
                                    </div>
                                </div>
                                <div class="info-wrap">

                                    <div class="title-wrap">
                                        <a href="/book/the-rise-and-fall-of-the-dinosaurs/steve-brusatte/9781509830091" class="title link-invert">The Rise and Fall of the Dinosaurs</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-rise-and-fall-of-the-dinosaurs/steve-brusatte/9781509830091" class="text-gold"><b>Steve Brusatte</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp">£9.99</span>
                                            <span class="price">&nbsp;&nbsp;£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="6" data-isbn="9780008218430" data-productid="7790227" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="The Hidden Life of Trees">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-hidden-life-of-trees/peter-wohlleben/9780008218430">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/bookjackets/large/9780/0082/9780008218430.jpg" alt="The Hidden Life of Trees" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/the-hidden-life-of-trees/peter-wohlleben/9780008218430" class="title link-invert">The Hidden Life of Trees</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-hidden-life-of-trees/peter-wohlleben/9780008218430" class="text-gold"><b>Peter Wohlleben</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp">£9.99</span>
                                            <span class="price">&nbsp;&nbsp;£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="7" data-isbn="9781785039874" data-productid="8612949" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="No. More. Plastic.">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/no-more-plastic/martin-dorey/chris-packham/9781785039874">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/bookjackets/large/9781/7850/9781785039874.jpg" alt="No. More. Plastic." class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/no-more-plastic/martin-dorey/chris-packham/9781785039874" class="title link-invert">No. More. Plastic.</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/no-more-plastic/martin-dorey/chris-packham/9781785039874" class="text-gold"><b>Martin Dorey</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£6.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="8" data-isbn="9781784742027" data-productid="8911113" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="'Cherry' Ingram">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/cherry-ingram/naoko-abe/9781784742027">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/override/v1/large/9781/7847/9781784742027.jpg" alt="'Cherry' Ingram" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/cherry-ingram/naoko-abe/9781784742027" class="title link-invert">'Cherry' Ingram</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/cherry-ingram/naoko-abe/9781784742027" class="text-gold"><b>Naoko Abe</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp">£18.99</span>
                                            <span class="price">&nbsp;&nbsp;£16.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="9" data-isbn="9781856699662" data-productid="4812773" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="Match a Pair of Birds">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/product/match-a-pair-of-birds/christine-berrie/mike-unwin/9781856699662">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/override/v1/large/9781/8566/9781856699662.jpg" alt="Match a Pair of Birds" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/product/match-a-pair-of-birds/christine-berrie/mike-unwin/9781856699662" class="title link-invert">Match a Pair of Birds</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/product/match-a-pair-of-birds/christine-berrie/mike-unwin/9781856699662" class="text-gold"><b>Christine Berrie</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£12.95</span>

                                        </div>
                                        <span class="format">
                                    Game
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="10" data-isbn="9780571345793" data-productid="8522437" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="The Secret Life of Cows">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-secret-life-of-cows/rosamund-young/9780571345793">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/bookjackets/large/9780/5713/9780571345793.jpg" alt="The Secret Life of Cows" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/the-secret-life-of-cows/rosamund-young/9780571345793" class="title link-invert">The Secret Life of Cows</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-secret-life-of-cows/rosamund-young/9780571345793" class="text-gold"><b>Rosamund Young</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="11" data-isbn="9781473664968" data-productid="8203918" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="Adventures of a Young Naturalist">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/adventures-of-a-young-naturalist/sir-david-attenborough/9781473664968">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/bookjackets/large/9781/4736/9781473664968.jpg" alt="Adventures of a Young Naturalist" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/adventures-of-a-young-naturalist/sir-david-attenborough/9781473664968" class="title link-invert">Adventures of a Young Naturalist</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/adventures-of-a-young-naturalist/sir-david-attenborough/9781473664968" class="text-gold"><b>Sir David Attenborough</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£10.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="12" data-isbn="9781473655928" data-productid="8797913" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="Wild Signs and Star Paths">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/wild-signs-and-star-paths/tristan-gooley/9781473655928">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/bookjackets/large/9781/4736/9781473655928.jpg" alt="Wild Signs and Star Paths" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/wild-signs-and-star-paths/tristan-gooley/9781473655928" class="title link-invert">Wild Signs and Star Paths</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/wild-signs-and-star-paths/tristan-gooley/9781473655928" class="text-gold"><b>Tristan Gooley</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp">£9.99</span>
                                            <span class="price">&nbsp;&nbsp;£7.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="13" data-isbn="9780008316358" data-productid="8832349" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="Extraordinary Insects">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/extraordinary-insects/anne-sverdrup-thygeson/9780008316358">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/bookjackets/large/9780/0083/9780008316358.jpg" alt="Extraordinary Insects" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/extraordinary-insects/anne-sverdrup-thygeson/9780008316358" class="title link-invert">Extraordinary Insects</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/extraordinary-insects/anne-sverdrup-thygeson/9780008316358" class="text-gold"><b>Anne Sverdrup-Thygeson</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp">£14.99</span>
                                            <span class="price">&nbsp;&nbsp;£12.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="14" data-isbn="9780857524577" data-productid="8946234" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="Still Water">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/still-water/john-lewis-stempel/9780857524577">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/override/v1/large/9780/8575/9780857524577.jpg" alt="Still Water" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/still-water/john-lewis-stempel/9780857524577" class="title link-invert">Still Water</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/still-water/john-lewis-stempel/9780857524577" class="text-gold"><b>John Lewis-Stempel</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>

                                            <span class="price-rrp">£14.99</span>
                                            <span class="price">&nbsp;&nbsp;£12.99</span>

                                        </div>
                                        <span class="format">
                                    Hardback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide book-preview" data-carousel-position="15" data-isbn="9780141979366" data-productid="6066533" data-preorder="0" data-buy="1" data-cnc="1" style="width: 176.667px; margin-right: 20px;">

                            <div title="The Shepherd's Life">
                                <div class="image-wrap">
                                    <div class="image-container">
                                        <a href="/book/the-shepherds-life/james-rebanks/9780141979366">
                                            <img src="/images/cover404.png" data-src="https://cdn.waterstones.com/bookjackets/large/9780/1419/9780141979366.jpg" alt="The Shepherd's Life" class="swiper-lazy" onerror="this.src='/images/cover404.png'">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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
                                        <a href="/book/the-shepherds-life/james-rebanks/9780141979366" class="title link-invert">The Shepherd's Life</a>
                                    </div>
                                    <div class="author-wrap">

                                        <span class="authors"><a href="/book/the-shepherds-life/james-rebanks/9780141979366" class="text-gold"><b>James Rebanks</b></a> </span>

                                    </div>
                                    <div class="book-price">
                                        <div>


                                            <span class="price">£9.99</span>

                                        </div>
                                        <span class="format">
                                    Paperback
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-black"></div>
                    <div class="swiper-button-prev swiper-button-black swiper-button-disabled"></div>
                </div>
            </section>


            <div class="book-reviews mobile-section span12">
                <div class="reviews-header anchor-fix" id="reviews">
                    <a id="write-review"></a>
                    <h2 class="heading-fg review-header-title">Reviews</h2>
                    <a href="/reviews/underland/robert-macfarlane/9781785176203">View all</a>
                    <a data-modal-id="loginModal" data-hash="write-review" class="js-open-modal pdp-write-review">
                        Sign In To Write A Review
                    </a>

                </div>
                <div class="row reviews-list">
                    {{--<div class="span12 alpha omega reviews-row">--}}
                        {{--<div class="book-review span12 tablet-span12 mobile-span12 mobile-alpha mobile-omega alpha" itemprop="review" itemscope="" itemtype="http://schema.org/Review">--}}
                            {{--<div class="review-text-wrap" style="min-height: 140px;">--}}
                                {{--<div class="review-top review-list-item clearfix">--}}
                                    {{--<div class="avatar-placeholder user-picture pull-left"></div>--}}

                                    {{--<h3 class="intro" itemprop="name">“Transportive Magic and Urgent Warnings”</h3>--}}
                                {{--</div>--}}

                                {{--<div class="bookseller-review-tag"></div>--}}

                                {{--<p class="p-medium" itemprop="description">--}}
                                    {{--I was taken to deep places I never knew existed and made to feel like I was right there beside Macfarlane, sharing in the otherworldly power of those distant spaces. He masterfully ties his underground journeys...--}}
                                    {{--<a href="/books/reviews/isbn/9781785176203#review-119097">More</a>							</p>--}}
                            {{--</div>--}}

                            {{--<div class="meta">--}}
                                {{--<div style="float:left; margin-top:0px; margin-right:5px;">Hardback edition</div>--}}
                                {{--<div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">--}}
                                    {{--<meta itemprop="worstRating" content="1">--}}
                                    {{--<meta itemprop="ratingValue" content="5">--}}
                                    {{--<meta itemprop="bestRating" content="5">--}}

                                    {{--<div class="active"></div>--}}
                                    {{--<div class="active"></div>--}}
                                    {{--<div class="active"></div>--}}
                                    {{--<div class="active"></div>--}}
                                    {{--<div class="active"></div>--}}
                                {{--</div>--}}


                                {{--<div>--}}
                                    {{--<a class="user link-invert" itemprop="author" href="/reviews/user/id/7448774/michael-paget">Michael Paget</a>--}}
                                {{--</div>--}}

                                {{--<div class="review-item-small-functions">--}}
                                    {{--<div class="comment-bottom">--}}
                                        {{--<div itemprop="datePublished">19th April 2019</div>--}}
                                        {{--<div>--}}
                                            {{--<a href="/books/reviews/isbn/9781785176203/replies/119097#review-119097" data-modal-id="loginModal" class="js-open-modal">Comment (0)</a>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<a href="#" data-modal-id="reportReviewModal" data-review="119097" class="js-open-modal" data-type="review">Report</a>--}}
                                        {{--</div>--}}

                                        {{--<span>--}}
										{{--<span>Helpful?</span>--}}
										{{--<span class="comment-vote-container">--}}
											{{--<a class="comment-vote vote-up  " href="/books/reviewvote/id/119097/positive/1" rel="nofollow" title="Thumbs up">Upvote</a>--}}
											{{--<b class="vote-count vote-count-up">5</b>--}}

										{{--</span>--}}
									{{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="span12 alpha omega reviews-write">
                        <p>Please <a href="" data-modal-id="loginModal" data-hash="write-review" class="js-open-modal">sign in</a> to write a review</p>
                    </div>
                    <div class="span12 alpha omega reviews-success content-text">
                        <p class="message">
                            Your review has been submitted successfully.
                        </p>



                    </div>
                </div>
            </div>

            <script>
                var unsaved_review = false;
                $(function() {

                    $('#reviewSubmitButton').on('click', function(e){

                        var titleValue = $.trim($("#title").val());

                        var reviewValue = $.trim($("#reviewTextArea").val());


                        var ratingValue = $.trim($("#rating").val());



                        if (titleValue.length === 0 || reviewValue.length === 0 || ratingValue.length == 0) {
                            e.preventDefault();



                            if (ratingValue.length == 0  && titleValue.length === 0 && reviewValue.length === 0 ){

                                $('#allMissingErr').removeClass('hideMsg');

                            }else if (titleValue.length === 0 || reviewValue.length === 0){

                                if (ratingValue.length > 0){
                                    $('#inputTitleReviewErr').removeClass('hideMsg');
                                    $('#allMissingErr').addClass('hideMsg');
                                    $('#inputRatingErr').addClass('hideMsg');
                                }else{

                                    $('#inputTitleReviewErr').addClass('hideMsg');
                                    $('#inputRatingErr').addClass('hideMsg');
                                    $('#allMissingErr').removeClass('hideMsg');

                                }




                            }else{

                                if (ratingValue.length == 0){
                                    $('#allMissingErr').addClass('hideMsg');
                                    $('#inputRatingErr').removeClass('hideMsg');
                                }else{

                                    $('#allMissingErr').addClass('hideMsg');

                                }


                            }


                            $('html, body').animate({
                                scrollTop: $(".reviews-header").offset().top
                            }, 400);

                        } else {
                            $("#inputTitleReviewErr").addClass("hideMsg");
                            $('#inputRatingErr').addClass('hideMsg');


                            var reviewForm = $('.form-write-review');

                            unsaved_review = false;

                            $('.form-write-review .button-submit').attr('disabled', true).text('Posting...');
                            $('.error', reviewForm).hide();

                            reviewForm.ajaxSubmit(function(data) {
                                var successContainer = $('.reviews-success');

                                if(data.ret) {
                                    successContainer.find('.message').text(data.message);

                                    if(data.url) {
                                        $('.review-header-title').html('Thanks for your review');
                                        successContainer.find('.message').append(' <a href="' + data.url + '">View your review.</a>');
                                    }

                                    $('.reviews-write').hide();
                                    successContainer.show();

                                    $('.write-review-trigger').hide();

                                    if($('.share-review-toggle').is(':checked')) {
                                        var text = $('.review-body').val();
                                        shareReview(text);
                                    }
                                }
                                else {
                                    $('.form-write-review .button-submit').attr('disabled', false).text('Submit');
                                    $('.error', reviewForm).show().text(data.message);
                                    $('.token', reviewForm).val(data.token);
                                }
                            });

                            return false;





                        }




                    });


                    // facebook
                    function shareReview(text) {
                        FB.api('/me/feed', 'POST', {
                            message: text
                        }, function(response) {

                        });
                    }



                    // review error warning
                    $('#title, #reviewTextArea').on('change', function(){

                        if(!unsaved_review){
                            unsaved_review = true;
                        }

                    });

                    $('a, button.input-search-button, button#click-n-collect').on('click', function(e){

                        if(unsaved_review){

                            e.preventDefault();

                            var href = $(this).attr('href');

                            $("#alertMsg").addClass("showMsg");

                            $('#completeReviewYes').on('click', function(){

                                $("#alertMsg").removeClass("showMsg");
                                $("#alertMsg").addClass("hideMsg");

                                return false;
                            });

                            $('#completeReviewNo').on('click', function(){
                                window.location = href;
                            });

                            $('html, body').animate({
                                scrollTop: $(".reviews-header").offset().top
                            }, 400);
                        }
                    })

                    var listContainer = $('.book-results');
                    var moreContainer = $('.search-more');



                    $('.search-input').each(function() {
                        var container = $(this);

                        function search() {

                            var term = $('input', container).val();


                            if (term == "" || !term)
                            {
                                var term = window.rec_search_term;

                                alert('Please enter title, author or ISBN to begin your search');
                                $('input', container).focus();
                                return false;
                            }


                            if( term != window.rec_search_term)
                            {
                                listContainer.empty();
                                window.rec_search_term = term;
                                page = 1;
                            }
                            else
                            {
                                page = page + 1;
                            }
                            window.rec_search_page = page;

                            var listId = listContainer.data('listid');

                            if(term) {
                                $.getJSON('/account/listbooksearch', { term: term, listid: listId, page: page }, function(data) {
                                    if(data.ret) {
                                        listContainer.show();


                                        $.each(data.books, function(i, book) {
                                            var listItem = $('.template .book-list-result').clone();

                                            listItem.data('id', book.id);

                                            $('.title', listItem).text(book.title);

                                            if(book.contributorName) {
                                                $('.contrib', listItem).text( book.contributorName);
                                            }
                                            if(book.format) {
                                                $('.book-format', listItem).text( book.format);
                                            }
                                            if(book.altimage)
                                            {
                                                $('.book-list-image img', listItem).prop('src', book.altimage);
                                            }
                                            else
                                            {
                                                $('.book-list-image img', listItem).prop('src', book.imageUrl);
                                            }

                                            if(book.availability) {
                                                $('.availability', listItem).text(  book.availability );
                                                $('.availability', listItem).css( 'color' ,  book.stock_colour );
                                            }
                                            if(book.campaign_price) {
                                                $('.price', listItem).text( book.currency_symbol_left + book.campaign_price + book.currency_symbol_right);
                                            }
                                            else
                                            {
                                                $('.price', listItem).text( book.currency_symbol_left + book.price + book.currency_symbol_right);
                                            }

                                            $('.book-list-image img', listItem).prop('alt', book.title);

                                            listItem.appendTo(listContainer);
                                        });

                                        if(data.books.length == 0) {
                                            listContainer.append('<p class="no-results-text">No results found</p>');
                                        }

                                        if(data.books.length >= 18)
                                        { moreContainer.show(); }
                                        else { moreContainer.hide(); }
                                    }
                                });
                            }

                            return false;
                        }

                        $('button', container).click(search);
                        $('input', container).keydown(function(e) {
                            if(e.keyCode === 13) {
                                search();
                                return false;
                            }
                        });
                    });




                    var listItemId;
                    listContainer.on('click', '.book-list-item', function() {
                        var listItem = $(this),
                            bookId = listItem.data('id'),
                            listId = listContainer.data('listid'),
                            input = $('<input id="' + bookId + '"type="hidden" name="recbooks[]" />');


                        var elementExists = document.getElementById(bookId);

                        if($(elementExists).length > 0) {

                        }else{
                            $.get('/books/preview', { id: bookId }, function(data) {
                                $('.review-rec-books').append(data);
                            });

                            input.val(bookId);
                            input.appendTo('.form-write-review');
                        }

                        var divCount = $(".review-rec-books > div").length;

                        if(divCount < 9) {
                            $('.book-list-add').show();

                        }else{
                            $('.book-list-add').hide();
                        }
                    });

                });
            </script>



        </div><!-- book microdata ends -->
    </div>

    <script>
        $(function() {
            var isbn = $('.reviews-list').data('isbn');

            $('.reviews-list-item').each(function() {
                var container = $(this),
                    replies = $('.review-replies', container),
                    repliesContent = $('.review-replies-content', replies),
                    reviewId = container.data('id');


                $('.replies-trigger', container).on('click', function(e) {
                    e.preventDefault();

                    var trigger = $(this);

                    if (replies.hasClass('active')) {
                        replies.height(replies.height());

                        replies.transition({ height: 0 }, 300, function() {
                            replies.removeClass('active');
                        });
                    }
                    else {
                        replies.stop().addClass('active').height('auto');

                        var repliesBottomPosition = replies.offset().top + replies.outerHeight(),
                            scrollTop = win.scrollTop(),
                            winHeight = win.height();

                        if ((!trigger.hasClass('comment-trigger')) && ((winHeight + scrollTop) < repliesBottomPosition)) {
                            win.scrollTop(repliesBottomPosition - winHeight);
                        }

                        var newHeight = replies.addClass('active').height('auto').height();
                        replies.height(0).transition({ height: newHeight }, 300, 'cubic-bezier(0.660, -0.230, 0.420, 1.290)', function() {
                            replies.height('auto');
                        });
                    }
                });
            });

            $('.comment-report').on('click', function() {
                if(confirm('Are you sure you want to report this comment?')) {
                    $.get(this.href);

                    var trigger = $(this);
                    trigger.animate({ opacity: 0 }, 400, function() {
                        var message = $('<span/>').text('Your report has been submitted').css({ opacity: 0 })
                        trigger.after(message);
                        message.animate({ opacity: 1 }, 400);
                        trigger.remove();
                    });
                }

                return false;
            });

            $('.comment-vote-container').each(function() {
                var container = $(this);
                var triggers = $('.comment-vote', container);

                triggers.on('click', function() {
                    $.getJSON(this.href, function(data) {
                        if(data.ret) {
                            container.stop().animate({ opacity: 0 }, 400, function() {
                                triggers.removeClass('voted');

                                $('.vote-count-up', container).text(data.votesUp);
                                //$('.vote-count-down', container).text(data.votesDown);

                                if(data.userVoteUp) {
                                    triggers.filter('.vote-up').addClass('voted');
                                }

                                //if(data.userVoteDown) {
                                //	triggers.filter('.vote-down').addClass('voted');
                                //}

                                container.animate({ opacity: 1 }, 400);
                            });
                        }
                        else {
                            if(data.errorcode == 'unauthorized') {
                                window.location = '/signin';
                            }
                        }
                    });

                    return false;
                });
            });

            // review reply trigger
            var matches = window.location.hash.match(/review-comment-(\d+)/);
            if(matches && matches.length === 2) {
                var id = matches.pop();
                var reviewContainer = $('#review-' + id);

                if(reviewContainer.length > 0) {
                    reviewContainer.find('.replies-trigger').trigger('click');
                }
            }

            // validate
            $('.form-blog').each(function() {
                var form = $(this);

                form.validate({
                    errorClass: 'input-error',
                    submitHandler: function() {
                        var error = form.find('.comment-error');
                        error.hide();

                        form.ajaxSubmit(function(data) {
                            if(data.ret) {
                                form.parents('.comments-new').hide();
                                form.parents('.review-reply').find('.review-comment-success').show();
                            }
                            else {
                                error.show();
                                error.text(data.message);
                                form.find('.token').val(data.token);
                            }
                        });

                        return false;
                    }
                });
            });
        });
    </script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '699389590143679',
                xfbml      : true,
                version    : 'v2.1'
            });

            $(window).trigger('fb-init');
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>



    <script>
        $(function() {
            if (!touch || desktopView) {

                $('.book-carousel').bookCarousel();

                $('.book-image-thumbs').carousel({
                    maxIncrement: false
                });

                $('.book-personalisation').each(function() {
                    var container = $(this);

                    $('.personalisation-carousel', container).carousel({
                        cropEnd: true
                    });
                });

            }

            $('.book-image-main > .inner').each(function() {
                var slide = $(this);
                var proc = null;
                var touching = false;

                function update() {
                    clearTimeout(proc);

                    slide.stop();

                    var blockWidth = slide.width();
                    var scroll = slide.scrollLeft();
                    var mod = (scroll % blockWidth);

                    if(mod < (blockWidth / 2)) {
                        var scrollDelta = -mod;
                    }
                    else {
                        var scrollDelta = (blockWidth - mod);
                    }

                    var targetScroll = (scroll + scrollDelta);
                    slide.animate({ scrollLeft: targetScroll }, Math.abs(scrollDelta));

                    var index = Math.floor(targetScroll / blockWidth);
                    $('.book-detail .bullets .bullet').removeClass('active').eq(index).addClass('active');
                }

                slide.on('touchstart', function() {
                    touching = true;
                    clearTimeout(proc);
                    slide.stop();
                });

                slide.on('touchend', function() {
                    touching = false;
                    update();
                });

                slide.on('scroll', function() {
                    clearTimeout(proc);

                    if(!touching) {
                        proc = setTimeout(update, 100);
                    }
                });
            });

            $('.remove-viewed').on('click', function() {
                if(confirm('Are you sure you want to remove all recently viewed?')) {
                    $.get(this.href);

                    $('.book-personalisation-recent .carousel').fadeOut(500, function() {
                        $(this).remove();
                    });
                }

                return false;
            });

            $('.book-image-thumbs .book-thumb-inner').on('click', function() {
                var index = $(this).data('index');
                var mainImage = $('.book-detail .book-image-main > img');
                var additionalImages = $('.book-detail .additional-images img');

                additionalImages.removeClass('active');

                if(index == -1) {
                    mainImage.show();
                }
                else {
                    mainImage.hide();
                    additionalImages.eq(index).addClass('active');
                }
            });



            // review scroll
            function scrollReviews() {
                var top = $('#reviews').offset().top;

                $('.reviews-row').hide();
                $('.reviews-write').show();

                animatedScrollPageTo(top, 1000);
            }

            $('.write-review-trigger:not(".js-open-modal")').on('click', function(e) {
                e.preventDefault();

                $('.reviews-row').hide();
                $('.reviews-write').show();

                $('html, body').animate({
                    scrollTop: $('#reviews').offset().top
                }, 1000);

            });



            if(window.location.hash == '#write-review') {
                setTimeout(function(){
                    scrollReviews();
                }, 600);
            }

            // star rating
            $('.review-rate .star-rating').each(function() {
                var container = $(this);
                var stars = $('> div', container);
                var input = $('.rating-value');

                input.val('');

                stars.on('click', function() {
                    var trigger = $(this);

                    stars.removeClass('active');
                    trigger.prevAll().add(trigger).addClass('active');
                    input.val(trigger.index() + 1);
                });
            });

            // write review form
            $('.form-write-review').each(function() {
                var form = $(this);

                form.validate({
                    messages: {
                        rating: 'Please choose a star rating'
                    },
                    errorClass: 'input-error',
                    ignore: [],
                    submitHandler: function() {
                        unsaved_review = false;
                        $('.form-write-review .button-submit').attr('disabled', true).text('Posting...');
                        $('.error', form).hide();

                        $('.form-write-review').ajaxSubmit(function(data) {
                            var successContainer = $('.reviews-success');

                            if(data.ret) {
                                successContainer.find('.message').text(data.message);

                                if(data.url) {
                                    $('.review-header-title').html('Thanks for your review');
                                    successContainer.find('.message').append(' <a href="' + data.url + '">View your review.</a>');
                                }

                                $('.reviews-write').hide();
                                successContainer.show();

                                $('.write-review-trigger').hide();

                                if($('.share-review-toggle').is(':checked')) {
                                    var text = $('.review-body').val();
                                    shareReview(text);
                                }
                            }
                            else {
                                $('.form-write-review .button-submit').attr('disabled', false).text('Submit');
                                $('.error', form).show().text(data.message);
                                $('.token', form).val(data.token);
                            }
                        });

                        return false;
                    }
                });
            });

            // multi-format switcher
            $('.book-version-switch').on('change', function() {
                if($(this).is(':checked')) {
                    var url = $(this).val();
                    window.location = url;
                }
            });

            // facebook
            function shareReview(text) {
                FB.api('/me/feed', 'POST', {
                    message: text
                }, function(response) {

                });
            }

            $('.share-review-toggle').on('change', function() {
                var toggle = $(this);

                if(toggle.is(':checked')) {
                    FB.getLoginStatus(function(response) {
                        if(response.status !== 'connected') {
                            FB.login(function(response) {
                                if(response.status !== 'connected') {
                                    toggle.prop('checked', false).trigger('update');
                                }
                            }, { scope: 'publish_actions,publish_stream' });
                        }
                    });
                }
            });

            $('.review-body').on('keyup', function() {
                if($.trim($(this).val())) {
                    $('.label-share-review-toggle').show();
                }
                else {
                    $('.label-share-review-toggle').hide();
                    $('.share-review-toggle').prop('checked', false);
                }
            });
        });

        // Keep the reviews the same height on desktop
        function updateReviewHeight() {
            if (!mobileView) {
                var maxHeight = 0;

                $('.review-text-wrap:visible').each(function() {
                    var review = $(this);

                    // reset the min height
                    review.css('min-height', '0px');

                    // get the current height
                    var newHeight = review.height();

                    // calculate the max height
                    if (newHeight > maxHeight) {
                        maxHeight = newHeight;
                    }
                }).css('min-height', maxHeight);
            }
            else {
                $('.review-text-wrap').css('min-height', '0px');
            }
        }

        updateReviewHeight();
        $(window).on('load resize', updateReviewHeight);
    </script>



    <script>
        $(window).on('load', function(){
            if ($('.js-location-container').length && navigator.geolocation && touch) {
                var container = $('.js-location-container'),
                    form = $('form', container),
                    latInput = $('input[name=lat]', form),
                    lngInput = $('input[name=lng]', form),
                    searchInput = $('input[name="search"]', form);

                form.append('<button class="button button-gold get-location-button js-get-location">Use My Location</button>');

                var button = $('.js-get-location', form);

                button.on('click', function(e) {
                    e.preventDefault();

                    geoLocate(function(lat, lng, cityName){
                        latInput.val(lat);
                        lngInput.val(lng);
                        searchInput.val(cityName);
                        form.submit();
                    });
                });
            }
        });
    </script>




    @include('layouts.footer')


    <div id="loginModal" class="modal-box">
        <header>
            <a href="#" class="js-modal-close close">×</a>
            <h3>Sign In / Register</h3>
        </header>
        <div class="modal-body">
            <div class="login-area">
                <span class="register-here">Not registered? <a href="/registration" class="default-link">CREATE AN ACCOUNT</a><a href="/plus" class="plus-link">CREATE A <span class="inline-plus">plus</span> ACCOUNT</a></span>



                <form method="post" action="/signin" class="row ajax-login" novalidate="novalidate">
                    <input type="hidden" name="token" value="7bfbc6a1c2af984d375739e3c0760e63">

                    <input type="hidden" name="continue" value="/book/underland/robert-macfarlane/9781785176203">

                    <input class="input input-large" type="email" name="email" placeholder="Email address">
                    <input class="input input-large" type="password" autocomplete="off" name="password" placeholder="Password">
                    <label class="login-error input-error"></label>

                    <div class="span12 alpha omega submit-wrapper">
                        <div class="submit-wrapper-fields span7 alpha">

                            <div class="remember-me-wrap">
                                <label class="checkbox-label">
                                    <div class="ws-checkable-outer ws-checkbox-outer ws-checkbox-small"><input type="checkbox" class="ws-checkbox ws-checkbox-small" name="keepLoggedIn"></div>
                                    <span>Remember me</span>
                                </label>
                                <div class="remember-me-help init tooltipstered">?</div>
                            </div>
                            <a href="/reset" class="forgot-pass">Forgotten password?</a>

                        </div>
                        <button class="button button-large button-teal">Sign in</button>
                    </div>

                    <div class="span12 alpha omega login-privacy-message">
                        This site is protected by reCAPTCHA and the Google
                        <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                        <a href="https://policies.google.com/terms">Terms of Service</a> apply.
                    </div>

                    <input type="hidden" id="recaptchaResponse" name="recaptchaResponse">
                </form>

                <script>
                    $('.js-open-modal[data-modal-id="loginModal"]').click(function () {
                        enableRecaptchaV3("6Lf16pYUAAAAADXXxiXeoicfjrUocFClbTQw9Qzc", "ajax_login");
                    });
                </script>
            </div>

            <div class="reset-pass row" style="display:none;">
                <span style="font-weight: bold;">Forgotten password</span>

                <p class="message"></p>

                <form action="/reset/confirm" method="post" class="reset-password-form" novalidate="novalidate">
                    <input type="hidden" name="token" value="7bfbc6a1c2af984d375739e3c0760e63">
                    <div class="span12 alpha omega">
                        <p>Please enter your email address below and we'll send you a link to reset your password.</p>
                    </div>

                    <div class="span12 alpha omega contained-width-fields">
                        <div class="invisible right floater">
                            <button type="submit" class="button button-large button-teal">Submit</button>
                        </div>

                        <div class="input-wrapper">
                            <input type="email" name="email" class="input input-large" placeholder="Email address" required="">
                        </div>

                        <div class="right floater">
                            <button type="submit" class="button button-large button-teal">Submit</button>
                        </div>
                    </div>

                </form>
                <a href="" class="login-return">Back to login</a>


            </div>

        </div>

    </div>



    <div id="loginValidModal" class="modal-box">
        <header>
            <a href="#" class="js-modal-close close">×</a>
            <h3>Sign In</h3>
        </header>
        <div class="modal-body">

            <div class="login-area">

                <form id="loginValidForm" action="/securitylogin" class="row" name="login" autocomplete="off" novalidate="novalidate">
                    <input type="hidden" name="token" value="7bfbc6a1c2af984d375739e3c0760e63">
                    <input type="hidden" name="start" value="1">
                    <div class="span12 alpha omega">
                        <a href="/logout" class="lnkLogOut">Not you?</a>
                        <div class="clearfix"></div>
                        <input readonly="" type="email" name="email" id="login_valid_form_email" value="" placeholder="Email address" class="input input-large">

                        <input type="password" name="password" id="login_valid_form_password" value="" class="input input-large" autocomplete="off" placeholder="Password">

                        <label class="login-error input-error"></label>
                        <div class="span12 alpha omega submit-wrapper">
                            <div class="submit-wrapper-fields span8 mobile-span7 alpha">
                                <a href="/reset" class="forgot-pass">Forgotten password?</a>
                            </div>

                            <button class="button button-large button-teal">Sign in</button>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

            <div class="reset-pass row" style="display:none;">
                <span style="font-weight: bold;">Forgotten password</span>

                <p class="message"></p>

                <form action="/reset/confirm" method="post" class="reset-password-form" novalidate="novalidate">
                    <input type="hidden" name="token" value="7bfbc6a1c2af984d375739e3c0760e63">
                    <div class="span12 alpha omega">
                        <p>Use the form below to recover your username and password. New details will be emailed to you.</p>
                    </div>

                    <div class="span12 alpha omega contained-width-fields">
                        <div class="invisible right floater">
                            <button type="submit" class="button button-large button-teal">Submit</button>
                        </div>

                        <div class="input-wrapper">

                            <input readonly="" type="email" name="email" value="" placeholder="Email address" class="input input-large">
                        </div>

                        <div class="right floater">
                            <button type="submit" class="button button-large button-teal">Submit</button>
                        </div>
                    </div>

                    <div class="span12 alpha omega">
                        <p>If you have changed your email address then <a href="https://waterstones.zendesk.com/hc/en-us/requests/new" rel="nofollow">contact us</a> and we will update your details.</p>
                    </div>
                </form>
                <a href="" class="login-return">Back to login</a>


            </div>

        </div>
    </div>


    <div id="collectModal" class="modal-box">
        <header>
            <a href="#" class="js-modal-close close">×</a>
            <h3>Click &amp; Collect</h3>
        </header>
        <div class="modal-body">
            <div class="subheading">Simply reserve online and pay at the counter when you collect.
                Available in shop from just two hours, subject to availability.
            </div>
            <div class="collect-box thankyou">
                <div class="title">Thank you for your reservation</div>
                <div>Your order is now being processed and we have sent a confirmation email to you at <span id="customeremail"></span></div>
            </div>
            <div class="collect-box book">
                <div class="thumb"></div>
                <div class="info">
                    <div class="title"></div>
                    <div class="price"><span class="wasprice"></span><span class="nowprice"></span></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="collect-box stores open">
                <div class="store-message">
                    This item can be requested from the shops shown below. <span class="to-buy">If this item isn't available to be reserved nearby, <a href="" class="buy-link">add the item to your basket</a> instead and select 'Deliver to my local shop' at the checkout, to be able to collect it from there at a later date.</span>
                    <div style="display:none;">
                        <form class="buy-form" method="post" action="/checkout/setbasketitemqty">
                            <input type="hidden" name="mode" value="add" tabindex="0">
                            <input type="hidden" name="productid" value="" tabindex="0">
                            <input type="hidden" name="quantity" value="1" tabindex="0">
                        </form>
                    </div>
                </div>
                <div class="store-container"></div>
                <div class="search">
                    <div class="book-detail-cnc">
                        <div class="book-detail-cnc-form">
                            <form method="get" action="/reserve/search" class="find-collect clearfix geo_enabled" novalidate="novalidate">
                                <input type="hidden" name="isbn" id="searchshopid" value="">
                                <input type="hidden" name="lat" class="lat">
                                <input type="hidden" name="lng" class="lng">
                                <input type="text" name="search" class="input" placeholder="Search for a shop" value="" required="" autocomplete="off" tabindex="-1">
                                <button class="button button-gold" id="searchterm">Go</button>
                                <div class="js-location-container"><button class="button button-gold get-location-button js-get-location">Use my location</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collect-box details">
                <form action="/reserve/details" method="post" class="reserve-details-form" novalidate="novalidate">
                    <input type="hidden" name="total" id="bookprice" value="">
                    <input type="hidden" name="isbn" id="collectisbn" value="">
                    <input type="hidden" name="shopid" id="collectshopid" value="">
                    <div class="field">
                        <label>First name<abbr title="required">*</abbr></label>
                        <input type="text" name="customer_firstname" id="customer_firstname" class="textbox" value="" autocomplete="off">
                        <div class="input-overlay"></div>
                    </div>
                    <div class="field">
                        <label>Last name<abbr title="required">*</abbr></label>
                        <input type="text" name="customer_lastname" id="customer_lastname" class="textbox" value="" autocomplete="off">
                        <div class="input-overlay"></div>
                    </div>
                    <div class="field">
                        <label>Email address<abbr title="required">*</abbr></label>
                        <input type="email" name="customer_email" id="customer_email" class="textbox" value="" autocomplete="off">
                        <div class="input-overlay"></div>
                    </div>
                    <div class="field"></div>
                    <div class="field">
                        <div class="inline-radios">
                            <label>Preferred contact method</label>
                            <div class="fieldset">
                                <label class="radio-label">
                                    <div class="ws-checkable-outer ws-radio-outer checked"><input type="radio" name="preferred_contact_method" value="E" id="pref_E" class="input-radio ws-radio" checked="checked"></div>
                                    <span>Email</span>
                                </label>
                                <label class="radio-label">
                                    <div class="ws-checkable-outer ws-radio-outer"><input type="radio" name="preferred_contact_method" value="S" id="pref_S" class="input-radio ws-radio"></div>
                                    <span>Text message</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Mobile number<abbr title="required">*</abbr></label>
                        <input type="tel" name="customer_phone" id="customer_phone" class="textbox" value="" autocomplete="off">
                        <div class="input-overlay"></div>
                    </div>
                    <div class="field">
                        <label class="checkbox-label">
                            <div class="ws-checkable-outer ws-checkbox-outer"><input type="checkbox" class="ws-checkbox" name="opt_into_mailing" id="opt_into_mailing"></div>
                            <span class="label-content">
                <span>Please provide me with your latest book news, views and details of Waterstones’ special offers.</span>
              </span>
                        </label>
                    </div>
                    <button class="order button button-gold" type="submit">Place Order</button>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="collect-box orderready">
                <div class="title">When will my order be ready to collect?</div>
                <div>Following the initial email, you will be contacted by the shop to confirm that your item is available for collection.</div>
                <div class="shopcontact">Call us on <span class="shopphone"></span> or send us an email at <span class="shopemail"></span></div>
                <button class="js-modal-close button button-teal">OK</button>
            </div>
        </div>
        <div class="collect-error">
            <div class="title">Unfortunately there has been a problem with your order</div>
            <div class="error-message"></div>
            <div class="shopcontact">Please try again or alternatively you can contact your chosen shop on <span class="shopphone"></span> or send us an email at <span class="shopemail"></span></div>
            <p></p>
        </div>
    </div>

    <div id="reportReviewModal" class="modal-box">
        <header>
            <a href="#" class="js-modal-close close">×</a>
            <h3>Report <span class="report-type">Review</span></h3>
        </header>
        <div class="modal-body">
            <div>
                <form action="/books/reviewreport" method="post">
                    <input id="id" type="hidden" name="id" value="">
                    <input id="type" type="hidden" name="type" value="">
                    <p>Please select a reason for reporting this <span class="report-type">review</span>:</p>

                    <label class="radio-label">
                        <div class="ws-checkable-outer ws-radio-outer"><input type="radio" name="reason" value="1" class="input-radio ws-radio"></div>
                        <span>Hateful, abusive or threatening</span>
                    </label>
                    <label class="radio-label">
                        <div class="ws-checkable-outer ws-radio-outer"><input type="radio" name="reason" value="2" class="input-radio ws-radio"></div>
                        <span>Legal issue</span>
                    </label>
                    <label class="radio-label">
                        <div class="ws-checkable-outer ws-radio-outer"><input type="radio" name="reason" value="3" class="input-radio ws-radio"></div>
                        <span>Inappropriate language/content</span>
                    </label>
                    <label class="radio-label">
                        <div class="ws-checkable-outer ws-radio-outer"><input type="radio" name="reason" value="4" class="input-radio ws-radio"></div>
                        <span>Personally identifying information</span>
                    </label>

                    <button type="submit" class="button button-gold">Submit</button>
                </form>
            </div>
        </div>
    </div>






</div>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"1fd17811e3","applicationID":"15896488","transactionName":"MQdTNRBYXUNZAURbVghNchQRTVxdFwBfXVIVTVUEFlhaXA==","queueTime":0,"applicationTime":1958,"atts":"HUBEQ1hCEUVLB0JtWAEHXxU9SkdCUQxXEANEL14bC1VfUWRNBRwJRkpmCAxdXEdLQn5mGVdSH1FZGWR\/b1QECRkUFAtXVBcDGRglVVFSCT4eU1IIAwAJUgESfw8QVAcNQW8fDlQeAhtKQFMOFmZXVUwHU0ZcAkALQyxWERwaEVVBSg8NXz4LXREKGhZdXlgCA0MQCVZYVgEQRUJJBVRFVwgJA18MQBwQUBY9UAUGS1ZDS0AKEApRTAdSTAgKBxZTCAsbSkBDBBNMVkNMPUVAUERYEz1NW1xfUz4fR1cCB0MNA1dXbBcQX1BcFBYcDANaVVFKDlFcXDpNCFZaCAQIDVMHBAtWURMcThtSEgIZTU8=","errorBeacon":"bam.nr-data.net","agent":""}</script>

<script type="text/javascript" id="">(function(a,e,f,g,b,c,d){a.GoogleAnalyticsObject=b;a[b]=a[b]||function(){(a[b].q=a[b].q||[]).push(arguments)};a[b].l=1*new Date;c=e.createElement(f);d=e.getElementsByTagName(f)[0];c.async=1;c.src=g;d.parentNode.insertBefore(c,d)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create",google_tag_manager["GTM-N66L6Q"].macro(1),"auto");""!=google_tag_manager["GTM-N66L6Q"].macro(2)&&ga("set","\x26uid",google_tag_manager["GTM-N66L6Q"].macro(3));ga("require","displayfeatures");ga("require","ec");
    ga("ec:addProduct",{id:google_tag_manager["GTM-N66L6Q"].macro(4),name:google_tag_manager["GTM-N66L6Q"].macro(5),category:google_tag_manager["GTM-N66L6Q"].macro(6),brand:google_tag_manager["GTM-N66L6Q"].macro(7),variant:google_tag_manager["GTM-N66L6Q"].macro(8),dimension3:google_tag_manager["GTM-N66L6Q"].macro(9),dimension11:google_tag_manager["GTM-N66L6Q"].macro(10),dimension4:google_tag_manager["GTM-N66L6Q"].macro(11),dimension5:google_tag_manager["GTM-N66L6Q"].macro(12),dimension6:google_tag_manager["GTM-N66L6Q"].macro(13),dimension7:google_tag_manager["GTM-N66L6Q"].macro(14),dimension15:google_tag_manager["GTM-N66L6Q"].macro(15),dimension16:google_tag_manager["GTM-N66L6Q"].macro(16),dimension12:google_tag_manager["GTM-N66L6Q"].macro(17),dimension13:google_tag_manager["GTM-N66L6Q"].macro(18),
        dimension14:google_tag_manager["GTM-N66L6Q"].macro(19),dimension8:google_tag_manager["GTM-N66L6Q"].macro(20),dimension1:google_tag_manager["GTM-N66L6Q"].macro(21),dimension2:google_tag_manager["GTM-N66L6Q"].macro(22),dimension9:google_tag_manager["GTM-N66L6Q"].macro(23),dimension10:google_tag_manager["GTM-N66L6Q"].macro(24)});ga("ec:setAction","detail");ga("send","pageview");</script>
<script type="text/javascript" id="">
    "undefined"!=typeof $&&$(document).ajaxComplete(function(d,a,e){function k(a){var h={};a=a.split("\x26");for(var b=0;b<a.length;b++)a[b]=a[b].split("\x3d"),h[a[b][0]]=decodeURIComponent(a[b][1]);return h}0<=e.url.indexOf("\/checkout\/setbasketitemqty")&&(d=k(e.data),"add"===d.mode&&(a=a.responseJSON.gtm,function(a,d,b,e,c,f,g){a.GoogleAnalyticsObject=c;a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[c].l=1*new Date;f=d.createElement(b);g=d.getElementsByTagName(b)[0];f.async=1;f.src=e;g.parentNode.insertBefore(f,
        g)}(window,document,"script","//www.google-analytics.com/analytics.js","ga"),ga("create",google_tag_manager["GTM-N66L6Q"].macro(25),"auto"),""!=google_tag_manager["GTM-N66L6Q"].macro(26)&&ga("set","\x26uid",""),ga("require","displayfeatures"),ga("require","ec"),ga("ec:addProduct",{id:a.sku,name:a.title,category:a.category,brand:a.author,variant:a.format,dimension3:a.imprint,dimension5:a.has_description,dimension6:a.has_extra_pdf,dimension7:a.has_extra_jpeg,dimension8:a.average_review_rating,dimension12:a.availability_status,
        dimension13:a.available_for_collection,dimension14:a.available_on_marketplace,dimension15:a.has_author_biography,dimension16:a.has_extra_video,dimension11:a.rrp,dimension4:a.sku,dimension9:google_tag_manager["GTM-N66L6Q"].macro(27)}),ga("ec:setAction","add"),ga("send","event","UX","click","add to cart")))});</script>
<iframe id="AWIN_CDT" src="about:blank" style="height: 0px !important; width: 0px !important; visibility: hidden !important; display: inherit !important; margin: 0px !important; border: 0px none !important; padding: 0px !important;"></iframe><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div><div><iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="https://staticxx.facebook.com/connect/xd_arbiter/r/d_vbiawPdxB.js?version=44#channel=f1d0c68bf758be8&amp;origin=https%3A%2F%2Fwww.waterstones.com" frameborder="0"></iframe>
        </div>
    </div>
</div>
<script src={{url("../../../dist/js/swiper.min.js")}}></script>
{{--<script src={{url("../../../js/bundles/jquery.js")}}></script>--}}

<script>
    var swiper = new Swiper('.book-image-thumbs carousel', {
        navigation: {
            nextEl: '.carousel-control carousel-control-small next',
            prevEl: '.carousel-control carousel-control-small prev',
        },
    });
</script>
</body>
</html>