@extends('layouts.app')

@section('content')
    <div class="vc-wrap">
        <div  class="container">
            {!! Breadcrumbs::render('news')  !!}
            <div class="row">
                @foreach($news_list as $news)
                    <div class="col-md-12">
                        <a href="{{$news->url}}">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                    <img width="261" height="209" src="{{ $news->image }}" class="vc_single_image-img attachment-full" alt="">
                                </div>
                            </figure>
                            <h4>{{ $news->title }}</h4>
                            {!!  $news->description !!}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                {{ $news_list->links() }}
            </div>
        </div>
    </div>
@endsection