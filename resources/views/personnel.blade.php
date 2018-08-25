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
                                            <a href=""><img src="{{ $user->photos()->first()['src'] }}" class="img-fluid" alt=""></a>
                                            <p><strong>ID:</strong>{{ $user->id }}<br><span>{{ $user->name }}</span></p>
                                            <a href="{{ route('persona', $user->id) }}" class="btn btn-default">Еще Фото</a>
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
