<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Lora%3A400%2C700%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0" type='text/css' />
    <link rel='stylesheet' href="{{ asset('/css/bootstrap.min.css') }}" type='text/css' />
    <link rel='stylesheet' href='{{ asset('/css/style.css') }}' type='text/css' media='all' />
    <link rel="stylesheet" href="{{ asset('/css/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/rating.css') }}">

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body class="home page-template-default page page-id-701 wp-custom-logo unisco-front-page has-header-image page-two-column title-tagline-hidden wpb-js-composer js-comp-ver-5.1.1 vc_responsive"  style="overflow-x:hidden;">
<div class="site">
    <div class="block_head">
        <div class="header-top">
            <div class="container clearfix">

                <!--Top Left-->
                <div class="top-left pull-left">
                    <ul class="tell2">
                        <li><a href="tel:+74993901254">+7(499)340-08-90</a></li>
                        <li><a href="tel:88007005048">8(800)700-50-48</a></li>
                        <div>Для кандидатов и работодателей (звонки по РФ бесплатно)</div>

                    </ul>
                </div>
                <!--Top Right-->
                <div class="top-right pull-right">
                    @auth
                        <a href="{{ route('lk') }}">Личный кабинет</a>
                    @else
                        <a href="{{ route('login') }}">Вход</a> / <a href="{{ route('register') }}">Регистрация</a>
                    @endauth
                </div>
                <div class="lod_m">Лицензия Министерства Образования N 034186</div>
                <!--Top Right-->
            </div>
            <ul class="menu2">
                @foreach($menu_header as $item)
                    <li><a href="{{ $item->url }}" {{ (request()->path() == $item->url) ? 'class="active"' : '' }}>{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <header class="site-header"></header>
    @yield('content')

    <footer class="site-footer footer_home">
        <div class="container site-info">
            <div class="row footer-top">
                <div class="col-md-12 text-center">
                    <div class="col-md-12 widget widget_unisco_pro_newsletter_widget">
                        <div class="subscribe">
                            <h3 class="widget-title">Наши партнеры</h3>
                            <img src="https://jet-service.org/i/partners/partner1.png">
                            <img src="https://jet-service.org/i/partners/partner2.png">
                            <img src="https://jet-service.org/i/partners/partner3.png">
                            <img src="https://jet-service.org/i/partners/partner4.png">
                            <img src="https://jet-service.org/i/partners/partner5.png">
                            <img src="https://jet-service.org/i/partners/partner6.png">
                            <img src="https://jet-service.org/i/partners/partner8.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 widget widget_text">
                    <div class="textwidget">
                        <p><img title="logo" alt="logo" src="/img/logo.png" /></p>
                    </div>
                </div>
                <div class="col-md-2 widget widget_nav_menu">
                    <h3 class="widget-title">Меню</h3>
                    <div class="menu-footer-container">
                        <ul class="menu">
                            @foreach($menu_footer1 as $item)
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ $item->url }}" {{ (request()->path() == $item->url) ? 'class="active"' : '' }}>{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 widget widget_display_latest_tweets">
                    <h3 class="widget-title">Обучения</h3>
                    <ul class="menu">
                        @foreach($menu_footer1 as $item)
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ $item->url }}" {{ (request()->path() == $item->url) ? 'class="active"' : '' }}>{{ $item->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 widget widget_text">
                    <h3 class="widget-title">Контакты</h3>
                    <div class="textwidget">
                        <p><strong>Адрес</strong>: Москва, м.Преображенская площадь, ул.Краснобогатырская, д.6-1"</p><p><strong>Email</strong> : info@jet-service.org<br /><strong>Телефон</strong> : 8 800 700 50 48</p>
                        <p><img src="https://hit41.hotlog.ru/cgi-bin/hotlog/count?0.23588775961034947&amp;s=2252488&amp;im=720&amp;r=https%3A//jet-service.org/personnel/&amp;pg=https%3A//jet-service.org/&amp;j=N&amp;wh=1366x768&amp;px=24&amp;js=1.3" border="0" width="88" height="31" alt="HotLog"></p>
                    </div>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-md-12 text-center"> © 2007-2018 Jet-Service<br>
                    При любом использовании материалов ссылка на сайт обязательна
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<script>
    jQuery(document).ready(function($) {
        $('.owl-comment').owlCarousel({
            items: 1,
            nav:true,
            loop: true,
            autoplay: true,
            margin: 15,
            autoplayTimeout: 3000,
            autoplayHoverPause: true

        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.owl-car').owlCarousel({
            margin: 0,
            loop: true,
            autoWidth: true,
            items: 4,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true
        })
    })
</script>

<script>
    jQuery(document).ready(function($) {
        $('.fadeOut').owlCarousel({
            items: 1,
            animateOut: 'fadeOut',
            nav:true,
            loop: true,

        });
        $('.custom1').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            stagePadding: 30,
            smartSpeed: 450
        });
    });
</script>

<link rel='stylesheet' href='{{ asset('/css/js_composer_tta.min.css') }}' type='text/css' media='all' />
<script type='text/javascript' src='{{ asset('/js/owl.carousel.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/instafeed.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/waypoints.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/counterup.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/jquery.ajaxchimp.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/rating.min.js') }}'></script>

<script type='text/javascript' src='{{ asset('/js/vc-accordion.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/vc-tabs.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/common.js') }}'></script>



</body>
</html>
