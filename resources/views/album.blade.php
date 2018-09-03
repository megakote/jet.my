@extends('layouts.app')

@section('content')
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
    <div class="vc-wrap">
        <div  class="container">
            {{--{!! Breadcrumbs::render('page', $title)  !!}--}}
            <div class="row">
                <div class="col-md-12">
                   <h2>{{ $title }}</h2>
                    <br>
                    <div class="fotorama">
                        @foreach($images as $image)
                            <img src="/{{ $image }}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
