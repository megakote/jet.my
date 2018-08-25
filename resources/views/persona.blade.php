@extends('layouts.app')

@section('content')

    <div class="vc-wrap">
        <div  class="container">
            {!! Breadcrumbs::render('persona', $user)  !!}
            <div class="row">
                <div class="col-md-12 row">
                    <div class="col-md-4 text-center">
                        <section class="col-md-12 widget widget_unisco_instructor_widget">
                            <div class="my-5">
                                <p><strong>ID:</strong>{{ $user->id }}</p><h2>{{ $user->name }}</h2>
                                <img src="{{ $user->photos()->first()['src'] }}" class="img-fluid" alt="">
                                <div class="row">
                                @foreach($user->photos() as $photo)
                                        <div class="col-lg-4">
                                            <img src="{{ $photo['src'] }}" class="img-fluid" alt="">
                                        </div>
                                @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-8 my-5">
                        <div class="star-rating">
                            <div class="post-ratings col-md-12">
                                <div class="rate_2" id="rate_{{ $user->id }}" data-rate="{{ $user->reviews()->avg('stars') }}"></div>
                                ( <strong>{{ $user->reviews()->count() }}</strong> голосов)<br><span class="post-ratings-text"></span>
                            </div>
                        </div>
                        <section class="col-md-12 widget widget_unisco_course_widget my-2">
                            <ul class="admission_rating">
                                <li>ФИО<span>:</span></li>
                                <li class="admission_star">
                                    @can('see-data')
                                        {{ $user->fio }}
                                    @else
                                        Доступно после оплаты
                                    @endcan
                                </li>
                                <li class="admission_star-second">Возраст <span>:</span></li>
                                <li class="admission_star">	{{ $user->age }}</li>
                                <li class="admission_star-second">Рост <span>:</span></li>
                                <li class="admission_star">{{ $user->height }} см</li>
                                <li class="admission_star-second">Вес <span>:</span></li>
                                <li class="admission_star">{{ $user->weight }} кг</li>
                                <li>Владение языками <span>:</span></li>
                                <li class="admission_star">{{ $user->lang_skills }}</li>
                                <li>Наличие ID <span>:</span></li>
                                <li class="admission_star">
                                    @can('see-data')
                                        {{ $user->id_cart }}
                                    @else
                                        Доступно после оплаты
                                    @endcan
                                </li>
                                <li>Расстояние до аэропорта<span>:</span></li>
                                <li class="admission_star">
                                    @can('see-data')
                                        {{ $user->fio }}
                                    @else
                                        Доступно после оплаты
                                    @endcan
                                </li>
                                <li>Виза<span>:</span></li>
                                <li class="admission_star">{{ $user->visa }}</li>
                                <li>Телефон<span>:</span></li>
                                <li class="admission_star">
                                    @can('see-data')
                                        {{ $user->tel }}
                                    @else
                                        Доступно после оплаты
                                    @endcan
                                </li>
                                <li>E-mail<span>:</span></li>
                                <li class="admission_star">
                                    @can('see-data')
                                        {{ $user->email }}
                                    @else
                                        Доступно после оплаты
                                    @endcan
                                </li>
                                <li>Резюме CV<span>:</span></li>
                                <li class="admission_star">
                                    @can('see-data')
                                        {{ $user->cv }}
                                    @else
                                        Доступно после оплаты
                                    @endcan
                                </li>
                            </ul>
                        </section>
                        <div class="admission_testimonial">
                            <h4>Отзывы работодателей</h4>
                            <div class="owl-carousel owl-comment">
                                @foreach($user->reviews as $review)
                                    <div class="item admissiontesti_fon">
                                        <div class="admissiontesti-img_block">
                                            <img src="{{ $review->photo }}" alt="Testimonial">
                                        </div>
                                        <div class="admissiontesti_text">
                                            <p>{{ $review->text }}</p>
                                            <h6>
                                                <strong>{{ $review->name }}</strong><br><span>{{ $review->position }}</span>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @can('comment-users')
                        @include('partials/comment_user')
                    @else
                    <p>Комментировать могут только зарегистрированные пользователи хоть раз оплатившие доступ</p>
                    @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
