/*

 Script  : Public JS
 Version : 1.0
 Author  : SnapThemes
 URI     : https://snapthemes.io/

 Copyright © All rights Reserved
 SnapThemes.io

 */

jQuery(document).ready(function($){

    "use strict";

    /* ================================================
     Testimonials
     ================================================ */

    // Admission Detail
    if ($('.admission-testi_slider').length) {
        $('.admission-testi_slider').slick({
            dots: true,
            autoplay: true
        });
    }

    // About
    if ($('.single-item').length) {
        $('.single-item').slick({
            arrows: false,
            dots: true,
            autoplay: true
        });
    }


    /* ================================================
     Instagram Feed
     ================================================ */

    /* Want to customize? Read Documentation */
    if ($('.unisco-instafeed').length) {
        $('.unisco-instafeed').each( function(index) {
            var $this = $(this);
            var feed = new Instafeed({
                target: $this.attr('id'),
                get: 'user',
                userId: String($this.data('userid')),
                resolution: $this.data('resolution'),
                clientId: $this.data('clientid'),
                accessToken: $this.data('accesstoken'),
                template: '<div class="instafeed_img"><a href="{{link}}" target="_blank"><div class="instagram_img_holder" style="background-image: url({{image}});"></div><div class="instafeed_img_overlay"><span style="font-size:'+$this.data('titlesize')+'px;">'+$this.data('title')+'</span></div></a></div>',
                after: function () {
                    runInstaCarousel($this);
                },
                error: function () {
                    $this.html('<p class="text-center">To setup Instagram feed, Please read the documentation.</p>')
                }
            });

            feed.run();

            function runInstaCarousel(el) {
                el.owlCarousel({
                    center: false,
                    loop: true,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 3
                        },
                        600: {
                            items: 5
                        },
                        1000: {
                            items: 7
                        }
                    },
                    onInitialize: instagramFix
                });
            }

            function instagramFix() {
                $(document).find('.instafeed_img > a > img').each(function() {
                    var src = $(this).attr('src');
                    $(this).attr('src', src.replace('150x150', '320x320'));
                });
            }
        });
    }

    /* ================================================
     Event Toggle
     ================================================ */

    $('.event-toggle').on('click', function () {
        $(this).text($(this).text() == 'Hide Details' ? 'Show Details' : 'Hide Details');
    });

    /* ================================================
     Counter
     ================================================ */

    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }

    /* ================================================
     Slick Sliders
     ================================================ */

    // Home Event date
    if ($('.event-date-slide').length) {
        $('.event-date-slide').slick({
            arrows: false,
            dots: true,
            autoplay: true
        });
    }

    // Resources
    if ($('.resources-slick').length) {
        $('.resources-slick').slick({
            infinite: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }]
        });
    }
});