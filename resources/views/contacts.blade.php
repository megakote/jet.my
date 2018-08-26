@extends('layouts.app')

@section('content')
    <section class="vc-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 hk_marg" >
                    {!! Breadcrumbs::render('contacts', $title)  !!}
                </div>
                <div class="col-md-12 my-5 h2_marg" style="text-align:center" >
                    <h1>Контакты</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <main class="site-main">
                        <div class="entry-content">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <section class="contact-form-wrap">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="contact-form">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                                                                    <div class="contact-option_rsp">
                                                                        <h3>Оставить сообщение</h3>
                                                                        <form action="{{ route('contact.put') }}" method="post">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Имя" name="name" value="">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" placeholder="Email" name="email" value="">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Телефон" name="tel" value="">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <textarea placeholder="Сообщение" class="form-control" name="message" rows="5"></textarea>
                                                                            </div>
                                                                            <button class="btn btn-default btn-submit">Отправить</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                                    <div class="contact-address">
                                                                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Контактная информация</font></font></h3>
                                                                        <div class="contact-details">
                                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                                            <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адрес</font></font></h6>
                                                                            <p><font style="vertical-align: inherit;">Москва, м.Преображенская площадь, ул.Краснобогатырская, д.6-1, Бизнес-центр «Вилла-Рива» Последний вагон из центра, в переходе дважды направо, через дорогу и на любом трамвае до ост."Богородский Храм"</font></p></div>
                                                                        <div class="contact-details">
                                                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                                            <h6>E-mail: info@jet-service.org</h6></div>
                                                                        <div class="contact-details">
                                                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                                            <h6>Skype: jet-service.aviation</h6></div>
                                                                        <div class="contact-details">
                                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                                            <h6>Телефон: +7 (499) 340-08-90<br> 8 (800) 700-50-48</h6></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="contact-center">ИЛИ</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div><!-- .entry-content -->

                    </main><!-- #main -->
                </div><!-- .col-md-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Accd842bd69991beb0ae6d4a38fc94b20cbe9393e8ab0a877bb691b3c661761c3&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
@endsection
