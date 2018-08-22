@extends('layouts.app')

@section('content')
    <div class="vc-wrap">
        <div  class="container">
            {!! Breadcrumbs::render('courses-list')  !!}
            @foreach($coursesList as $courses)
            <div class="row">
                <div class="col-md-12 my-5" style="text-align:center" >
                    <h2>{{ $courses['title'] }}</h2>
                </div>
                @foreach($courses['courses'] as $course)

                    <div class="col-md-6">
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <div class="event-date">
                                    @if($course->type == 0)
                                        <h4>{{ $course->date_formatted[1] }}<span>{{ $course->date_formatted[2] }} {{ $course->date_formatted[0] }} г.</span></h4>
                                    @elseif($course->type == 1)
                                        <span>Online</span>
                                    @elseif($course->type == 2)
                                        <span>По мере набора</span>
                                    @endif
                                </div>
                                <span class="event-time">{{ $course->duration }}</span>
                            </div>
                            <div class="col-lg-8">
                                <h4 class="entry-title">{{ $course->name }}</h4>
                                <div class="course_duration1 text-center btn2">
                                    <ul>
                                        <li>
                                            <p>Стоимость: {{ $course->price }} руб.</p>
                                            <a href="{{ $course->url }}" class="btn btn-default my-2">Подробнее</a>
                                            <a href="/signup/?id={{ $course->id }}" class="btn btn-default my-2">Записаться</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
@endsection
