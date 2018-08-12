@extends('layouts.app')

@section('content')
    <div class="vc-wrap">
        <div  class="container">
            {!! Breadcrumbs::render('personnel')  !!}
            <div class="row justify-content-md-end">
                <div class="col-md-3 my-5">
                    <aside role="complementary">
                        <section class="col-md-12 widget widget_unisco_course_widget my-2 admission_rating">
                            @include('partials/buy_widget')
                        </section>
                        <section class="col-md-12 widget widget_recent_entries my-4">
                            @include('partials/personnel_filter')
                        </section>
                    </aside>
                </div>
                <!-- блок -->
                <div class="blxt col-md-9 row justify-content-md-center">
                    <div class="col-md-12 row justify-content-md-center">
                        <div class="col-md-12 my-5" style="text-align:center" >
                            <h1>База резюме ({{ $all }}). Обновление каждые 7 дней!</h1>
                        </div>

                        @foreach($users as $user)
                            <div class="col-md-12 row justify-content-md-center">
                                <div class="col-md-4 text-center">
                                    <section class="col-md-12 widget widget_unisco_instructor_widget">
                                        <div class="my-5">
                                            <a href=""><img src="https://jet-service.org/cache/W2500901525943352_e42b3f54a6f5440da34af0f5c9f0ea23.jpeg" class="img-fluid" alt=""></a>
                                            <p><strong>ID:</strong>1254<br><span>Дарья</span></p>
                                            <a href="" class="btn btn-default">Еще Фото</a>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-8 my-5">
                                    <div class="star-rating">
                                        <div class="post-ratings col-md-12">
                                            <img src="/img/rating_on.png" alt="1 звезда" title="1 звезда" style="cursor: pointer; border: 0px;">
                                            <img src="/img/rating_on.png" alt="2 звезды" title="2 звезды" style="cursor: pointer; border: 0px;">
                                            <img src="/img/rating_on.png" alt="3 звезды" title="3 звезды" style="cursor: pointer; border: 0px;">
                                            <img src="/img/rating_on.png" alt="4 звезды" title="4 звезды" style="cursor: pointer; border: 0px;">
                                            <img src="/img/rating_half.png" alt="5 звезд" title="5 звезд" style="cursor: pointer; border: 0px;">
                                            ( <strong>14</strong> голосов)<br><span class="post-ratings-text" ></span>
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
                                </div>
                            </div>
                        @endforeach

                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
