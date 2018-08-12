@if (count($breadcrumbs))
    <div class="col-md-12 hk_marg">
        <p>
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && $loop->first)
                <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
            @elseif ($breadcrumb->url && !$loop->last && !$loop->first)
                / <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
            @else
                / {{ $breadcrumb->title }}
            @endif

        @endforeach
        </p>
    </div>
@endif

{{--{{ Breadcrumbs::render('home') }}--}}