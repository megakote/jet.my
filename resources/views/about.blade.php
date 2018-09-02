@extends('layouts.app')

@section('content')
    <div class="vc-wrap">
        <div  class="container">
            {!! Breadcrumbs::render('about')  !!}
            <div class="row">
                <div class="col-md-4">
                    <aside class="widget-area" role="complementary">
                        <section class="col-md-12 widget widget_recent_entries">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h3>Новости</h3>
                                        </div>
                                    </div>
                                    <div class="research-posts">
                                        <div class="research-news_block">
                                            <span>16-августа-17</span>
                                            <p>Lorem Ipsum - просто фиктивный текст печатной и печатной промышленности ... ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
                <div class="col-md-8">
                    <main class="site-main">
                        <article>
                            <div class="col-md-12 my-5 h2_marg" style="text-align:center" >
                                <h2>{{ $title }}</h2>
                            </div>
                            <div class="entry-content">
                                {{ $body }}
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
