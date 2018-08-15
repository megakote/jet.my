@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('lk')  !!}
                <div class="col-md-12 vc_tta-container" data-vc-action="collapse">
                    <div class="vc_general vc_tta vc_tta-tabs vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-top vc_tta-controls-align-left">
                        <div class="vc_tta-tabs-container">
                            <ul class="vc_tta-tabs-list">
                                <li class="vc_tta-tab vc_active" data-vc-tab=""><a href="#a1" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Настройки</span></a></li>
                                @if($user->role_id < 4)
                                    <li class="vc_tta-tab" data-vc-tab=""><a href="#a2" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Галерея</span></a></li>
                                    <li class="vc_tta-tab" data-vc-tab=""><a href="#a5" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Мои отзывы</span></a></li>
                                    <li class="vc_tta-tab" data-vc-tab=""><a href="#a4" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Платные курсы</span></a></li>
                                @else
                                    <li class="vc_tta-tab" data-vc-tab=""><a href="#a6" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Оплата</span></a></li>
                                @endif

                                <li class="vc_tta-tab" data-vc-tab=""><a href="#a3" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Мои заказы</span></a></li>
                            </ul>
                        </div>
                        <div class="vc_tta-panels-container">
                            <div class="vc_tta-panels">
                                <div class="vc_tta-panel vc_active" id="a1" data-vc-content=".vc_tta-panel-body">
                                    <div class="vc_tta-panel-heading">
                                        <h4 class="vc_tta-panel-title">
                                            <a href="#a1" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Настройки</span></a>
                                        </h4>
                                    </div>
                                    <div class="vc_tta-panel-body">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div class="col-md-12 my-5">
                                                    <h4>Имя (Логин): Irina_jet</h4>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="row col-md-12" style="margin:0 auto;">
                                                        <div class="col-md-12 mx">
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-1">
                                                                    <img src="/img/instruction-img.jpg" alt="Testimonial">
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <label>Сменить аватар <input type="file" name=""></label>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-1">
                                                                    <label>Пол:</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input name="admission_first_name" class="form-control" value="" placeholder="Пароль">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-1">
                                                                    <label>Сменить пароль:</label>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <input name="admission_first_name" class="form-control" value="" placeholder="Старый пароль">
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <input name="admission_first_name" class="form-control" value="" placeholder="Новый пароль">
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <input name="admission_first_name" class="form-control" value="" placeholder="Повторите пароль">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-1">
                                                                    <label>Электронная почта:</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input name="admission_first_name" class="form-control" value="director@jet-service.org">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-1">
                                                                    <label>ФИО:</label>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <input name="admission_first_name" class="form-control" value="Юшина">
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <input name="admission_first_name" class="form-control" value="Ирина">
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <input name="admission_first_name" class="form-control" value="Александровна">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-1">
                                                                    <label>Телефон:</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input name="admission_first_name" class="form-control" value="89037987358">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-1">
                                                                    <label>SkyPe:</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input name="admission_first_name" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-2">
                                                                    <label><strong>Зарегистрирован:</strong></label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <label>30 сентября 2014 13:54:50</label>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-2">
                                                                    <label><strong>Последние изменения:</strong></label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <label>9 июня 2018 19:54:41</label>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group text-left">
                                                                <div class="col-lg-2">
                                                                    <label><strong>Срок действия аккаунта:</strong></label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <label>Без ограничений</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 my-1 text-left">
                                                                <button class="btn btn-default btn-courses" name="admission_submit">Сохранить</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_tta-panel" id="a3" data-vc-content=".vc_tta-panel-body">
                                    <div class="vc_tta-panel-heading">
                                        <h4 class="vc_tta-panel-title">
                                            <a href="#a3" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Мои заказы</span></a>
                                        </h4>
                                    </div>
                                    <div class="vc_tta-panel-body">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Заказов пока нет</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($user->role_id < 4)
                                    <div class="vc_tta-panel" id="a2" data-vc-content=".vc_tta-panel-body">
                                        <div class="vc_tta-panel-heading">
                                            <h4 class="vc_tta-panel-title">
                                                <a href="#a2" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Галерея</span></a>
                                            </h4>
                                        </div>
                                        <div class="vc_tta-panel-body">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_tta-panel" id="a5" data-vc-content=".vc_tta-panel-body">
                                        <div class="vc_tta-panel-heading">
                                            <h4 class="vc_tta-panel-title">
                                                <a href="#a5" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Мои отзывы</span></a>
                                            </h4>
                                        </div>
                                        <div class="vc_tta-panel-body">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div id="comments" class="comments-area">
                                                        <ul class="nav nav-tabs " role="tablist">
                                                            <li class="nav-item blogpost-nav-tab">
                                                                <a class="nav-link" data-toggle="tab" href="#read-comments" role="tab" aria-expanded="false">Всего отзывов (0)</a>
                                                            </li>
                                                            <li class="nav-item blogpost-nav-tab hidden-print">
                                                                <a class="nav-link active" data-toggle="tab" href="#write-comment" role="tab" aria-expanded="true">Написать отзыв</a>
                                                            </li>
                                                        </ul>
                                                        <div id="respond"  class="comment-respond blogpost-tabs">
                                                            <form action="" method="post" class="row comment-form">
                                                                <div class="col-8">
                                                                    <div class="form-group">
                                                                        <label for="">Ваш отзыв</label>
                                                                        <textarea class="form-control" rows="6"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 my-3">
                                                                    <input type="submit" name="submit" value="Отправить" class="btn btn-warning">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_tta-panel" id="a4" data-vc-content=".vc_tta-panel-body">
                                        <div class="vc_tta-panel-heading">
                                            <h4 class="vc_tta-panel-title">
                                                <a href="#a4" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Платные курсы</span></a>
                                            </h4>
                                        </div>
                                        <div class="vc_tta-panel-body">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                Номер
                                                            </td>
                                                            <td>
                                                                Название
                                                            </td>
                                                            <td>
                                                                Цена
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="vc_tta-panel" id="a2" data-vc-content=".vc_tta-panel-body">
                                        <div class="vc_tta-panel-heading">
                                            <h4 class="vc_tta-panel-title">
                                                <a href="#a2" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Оплата</span></a>
                                            </h4>
                                        </div>
                                        <div class="vc_tta-panel-body">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <section class="col-md-8 widget widget_unisco_course_widget my-2 admission_rating">
                                                      @include('partials/buy_widget')
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
