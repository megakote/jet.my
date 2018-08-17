@extends('layouts.app')

@section('content')

    <div class="vc-wrap">
        <div  class="container">
            {!! Breadcrumbs::render('page', $title)  !!}
            <div class="row">
                <div class="col-md-12 row">
                   <h2>{{ $title }}</h2>
                    <div>
                        {!! $body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
