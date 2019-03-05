<script>
    function stripslashes(str) {
        str = str.replace(/\\'/g, '\'');
        str = str.replace(/\\"/g, '"');
        str = str.replace(/\\0/g, '\0');
        str = str.replace(/\\\\/g, '\\');
        return str;
    }

    function getpage(id)
    {
        document.getElementById("page_ajax_spinner").style.display = 'block';
        $.ajax({
            type: "POST",
            url: "/pages/loadpage/id/" + id, dataType: 'json',
            success: function (data) {

                document.getElementById("pagesmain").insertAdjacentHTML('beforeEnd', stripslashes(data));

                document.getElementById("page_ajax_spinner").style.display = 'none';

                $('.slick_carousel.books_carousel:not(.slick_category_page)').on('init', function (event, slick) {
                    slick.refresh = slick.unfilterSlides;
                }).not('.slick-initialized').slick({
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    autoplay: false,
                    dots: false,
                    swipe: true,
                    arrows: true,
                    lazyLoad: 'progressive',
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4
                            }
                        },
                        {
                            breakpoint: 750,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 580,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        }
                    ]
                });
                $('.slick_carousel.slick_category_page').on('init', function (event, slick) {
                    slick.refresh = slick.unfilterSlides;
                }).not('.slick-initialized').slick({
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    autoplay: false,
                    dots: false,
                    swipe: true,
                    arrows: true,
                    lazyLoad: 'progressive',
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 974,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 845,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 580,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        }
                    ]
                });
                $('.slick_carousel.pod_slider4').not('.slick-initialized').slick({
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    autoplay: false,
                    dots: false,
                    swipe: true,
                    arrows: true,
                    lazyLoad: 'progressive',
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4
                            }
                        },
                        {
                            breakpoint: 750,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 580,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('.slick_carousel.pod_slider3').not('.slick-initialized').slick({
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: false,
                    dots: false,
                    swipe: true,
                    arrows: true,
                    lazyLoad: 'progressive',
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 750,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 580,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });

                $('.slick_carousel.pod_slider2').not('.slick-initialized').slick({
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: false,
                    dots: false,
                    swipe: true,
                    arrows: true,
                    lazyLoad: 'progressive',
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 750,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 580,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('.slick-gallery').not('.slick-initialized').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipeToSlide: true,
                    autoplay: true,
                    autoplaySpeed: 7000,
                    fade: false,
                    cssEase: 'linear',
                    speed: 1000,
                    dots: true,
                    arrows: false,
                    lazyLoad: 'progressive',
                    adaptiveHeight: true
                });

                $('.basket-form').basketUpdate({
                    postUpdate: function (data) {

                        var pre = $('.pre-add', this),
                            post = $('.post-add', this),
                            added = $('.added-basket', this.parents('.book-preview')),
                            bookTitle = $(this).closest(".book-preview").find(".title").html(),
                            basketListItem = $('#nav_basket', masthead).closest('li');

                        pre.animate({opacity: 0}, 250, function () {
                            pre.hide();
                            post.css({opacity: 0}).show().animate({opacity: 1});
                            added.addClass('added-show');
                        });

                        if (!bookTitle) {
                            bookTitle = $(".book-title").html();
                        }
                        $(".nav-dropdown-added .item-name").html(bookTitle);

                        basketListItem.addClass('active');
                        $('.dotdotdot').dotdotdot();

                        setTimeout(function () {
                            basketListItem.removeClass('active');
                        }, 3000);

                        return false;
                    }
                });

                $('.nav-dropdown-basket .setquantity-form').basketUpdate();

                $('.wl-add-all').basketUpdate();




            }
        });

    }

</script>