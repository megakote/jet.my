@extends('layouts.app')

@section('content')

    <div class="vc-wrap">
        <div  class="container">

            <div class="row">
                <div class="col-md-12 row">
                   <h2>{{ $title }}</h2>
                    {!! $body !!}
                </div>
            </div>
        </div>
    </div>
@endsection
