@extends('layouts.app')

@section('content')
    <div class="vc-wrap">
        <div  class="container">
            {!! Breadcrumbs::render('course', $name)  !!}
            <div class="row">
                <div class="col-md-12">
                    <main class="site-main">
                        <article>
                            <div class="entry-content">
                                <h1 class="edit-link-page">{{ $name }}</h1>
                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $description }}</font></font></p>
                                {!! $content !!}
                                <p>Общая продолжительность занятий: {{ $duration }}</p>
                                <p>Стоимость обучения: {{ $price }} р.</p>

                                <strong>{{ \App\Models\Course::TYPE[$type] }}</strong>
                                <a href="/signup/?id={{ $id }}" class="btn btn-default my-2">Записаться</a>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
