@extends('layouts.app')

@section('content')
    <header class="site-header">
        <div class="custom-header">
            <div class="container nav-menu">
                <div class="row">
                    <div class="col-md-12 mobile-logo">
                        <a href="/"><img src="/img/logo.png" class="img-fluid responsive-logo" alt=""></a>

                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="fadeOut owl-carousel owl-theme">

                        @foreach($slider as $slide)
                            <div class="item">
                                <img class="d-block" src="{{ $slide->image }}" alt="{{ $slide->title }}">
                                <div class="carousel-caption d-md-block">
                                    <div class="slider_title">
                                        <div class="slider-btn">
                                            {!! $slide->content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- header -->
    </header><!-- #masthead -->

    <section class="blog-wrap" style="">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element " >
                                <div class="wpb_wrapper">
                                    <h2>Анонсы ближайших курсов</h2>
                                </div>
                            </div>
                            <div class="vc_tta-container" data-vc-action="collapse">
                                <div class="vc_general vc_tta vc_tta-accordion vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left">
                                    <div class="vc_tta-panels-container">
                                        <div class="vc_tta-panels">
                                            @foreach($courses as $course)
                                                <div class="vc_tta-panel" id="0{{ $course->id }}" data-vc-content=".vc_tta-panel-body">
                                                    <div class="vc_tta-panel-heading">
                                                        <h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left"><a href="#0{{ $course->id }}" data-vc-accordion data-vc-container=".vc_tta-container">
                                                                <div class="anons_kurs_block">
                                                                    <div class="anons_kurs_block2">
                                                                        @if($course->type == 0)
                                                                            <p>{{ $course->date_formatted[0] }}</p><span>{{ $course->date_formatted[1] }} {{ $course->date_formatted[2] }} г.</span>
                                                                        @elseif($course->type == 1)
                                                                            <p>Online</p>
                                                                        @elseif($course->type == 2)
                                                                            <p>По мере набора</p>
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                                <h3>{{ $course->name }}, {{ $course->price }} р.</h3>
                                                                <div class="clear"></div>
                                                                <i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i></a>
                                                        </h4>
                                                    </div>
                                                    <div class="vc_tta-panel-body color_onons_text">
                                                        <div class="wpb_text_column wpb_content_element " >
                                                            <div class="wpb_wrapper left_block_anons">
                                                                {!!  $course->description !!}
                                                                <br>
                                                                <hr>
                                                                <a href="{{ $course->url }}" class="btn btn-default my-2">Подробнее</a>
                                                                <a href="/order/course/?id={{ $course->id }}" class="btn btn-default my-2">Записаться</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h2>Обучения стюардесс бизнес авиации</h2>
            </div>
        </div>
        <div class="fon_dep">
            <div class="fon_opacity"></div>
            <div class="bg-box container">
                <div class="row">
                    <div class="fon1_text">
                        <ul>
                            <li>1. ПРОЙТИ СТРОГИЙ ОТБОР НА ОБУЧЕНИЕ В НАШЕЙ ШКОЛЕ</li>
                            <li>2. ОБУЧИТЬСЯ И СДАТЬ ЭКЗАМЕН</li>
                            <li>3. ОТПРАВИТЬ РЕЗЮМЕ НА ОТКРЫТЫЕ ВАКАНСИИ<br>(списки вакансий мы предоставим)</li>
                            <li>4. ПРОЙТИ СОБЕСЕДОВАНИЕ С РАБОТОДАТЕЛЕМ<br>(на обучении научим проходить интервью)</li>
                            <li>5. НАСЛАЖДАТЬСЯ РАБОТОЙ СТЮАРДЕССЫ</li>
                        </ul>
                        <a href="#" class="btn btn-default">Пройти обучения</a>
                        <a href="#" class="btn btn-default">Подобрать персонал</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-wrap">
        <div class="container">
            <div class="row fon2_dep_h2">
                <h2>Обучение персонала на частные VIP-яхты.</h2>
            </div>
        </div>
        <div class="fon2_dep">
            <div class="fon_opacity"></div>
            <div class="bg-box container">
                <div class="row">
                    <div class="fon2_text">
                        <ul>
                            <li>1. ПРОЙТИ СТРОГИЙ ОТБОР НА ОБУЧЕНИЕ В НАШЕЙ ШКОЛЕ</li>
                            <li>2. ОБУЧИТЬСЯ И СДАТЬ ЭКЗАМЕН</li>
                            <li>3. ОТПРАВИТЬ РЕЗЮМЕ НА ОТКРЫТЫЕ ВАКАНСИИ<br>(списки вакансий мы предоставим)</li>
                            <li>4. ПРОЙТИ СОБЕСЕДОВАНИЕ С РАБОТОДАТЕЛЕМ<br>(на обучении научим проходить интервью)</li>
                            <li>5. НАСЛАЖДАТЬСЯ РАБОТОЙ СТЮАРДЕССЫ</li>
                        </ul>
                        <a href="#" class="btn btn-default">Пройти обучения</a>
                        <a href="#" class="btn btn-default">Подобрать персонал</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h2>Подготовка VIP-персонала для частных резиденций и домов.</h2>
            </div>
        </div>
        <div class="fon3_dep">
            <div class="fon_opacity"></div>
            <div class="bg-box container">
                <div class="row">
                    <div class="fon1_text">
                        <ul>
                            <li>1. ПРОЙТИ СТРОГИЙ ОТБОР НА ОБУЧЕНИЕ В НАШЕЙ ШКОЛЕ</li>
                            <li>2. ОБУЧИТЬСЯ И СДАТЬ ЭКЗАМЕН</li>
                            <li>3. ОТПРАВИТЬ РЕЗЮМЕ НА ОТКРЫТЫЕ ВАКАНСИИ<br>(списки вакансий мы предоставим)</li>
                            <li>4. ПРОЙТИ СОБЕСЕДОВАНИЕ С РАБОТОДАТЕЛЕМ<br>(на обучении научим проходить интервью)</li>
                            <li>5. НАСЛАЖДАТЬСЯ РАБОТОЙ СТЮАРДЕССЫ</li>
                        </ul>
                        <a href="#" class="btn btn-default">Пройти обучения</a>
                        <a href="#" class="btn btn-default">Подобрать персонал</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="vc_row">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="wpb_text_column wpb_content_element " >
                        <div class="wpb_wrapper">
                            <h2>Новости</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="row">
                                @foreach($news as $item)
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="courses_box mb-5">
                                            <div class="course-img-wrap">
                                                <img src="{{ $item->image }}" class="img-fluid" alt="Biochemistry">
                                                <div class="courses_box-img"></div>
                                                <div class="courses_box-img">
                                                    <div class="courses-link-wrap">
                                                        <a href="{{ $item->url }}" class="course-link"><span>Читать далее</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="courses_icon">
                                                <img src="/img/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                                            </div>
                                            <a href="{{ $item->url }}" class="course-box-content">
                                                <h3>{{ $item->created_at->format('Y.M.d') }}</h3>
                                                <p>{{ $item->description }}</p>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--
    <div class="fon4_dep">
        <div class="container">
            <div class="fon2_text3">
                <h2>Отзывы наших выпускников</h2>
                <div class="owl-carousel owl-comment">
                    @foreach($reviews as $review)
                        <div class="item admissiontesti_fon">
                            <div class="admissiontesti-img_block">
                                <img src="{{ $review->image }}" alt="Testimonial">
                            </div>
                            <div class="admissiontesti_text">
                                {{ $review->body }}
                                <h6><strong>{{ $review->name }}</strong></h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
--}}


    <div style="clear:both"></div>
    {{--
        <div class="owl-carousel owl-car owl-theme">
            @foreach($albums as $album)
                <div class="item">
                    <div class="instafeed_img">
                        <a href="{{ $album->url }}" target="_blank">
                            <div class="instagram_img_holder" style="background-image: url({{ $album->cover_image }});">
                            </div>
                            <div class="instafeed_img_overlay"><span style="font-size:16px;">{!! $album->title !!}</span></div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
        --}}
@endsection
