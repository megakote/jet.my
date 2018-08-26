@extends('layouts.app')

@section('content')
    <div class="vc-wrap">
        <div  class="container">
            {{--{!! Breadcrumbs::render('page', $title)  !!}--}}
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="row col-md-8" style="margin:0 auto;">
                            <div class="col-md-12">
                                <div class="col-md-12 my-5 h2_marg" style="text-align:center" >
                                    <h1 class="edit-link-page">Запись на тренинг</h1>
                                </div>
                                <div class="row form-group text-center">
                                    <div class="col-lg-4">
                                        <input type="text" name="surname" class="form-control" value="" placeholder="Фамилимя">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="name" class="form-control" value="" placeholder="Имя*" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="patronymic" class="form-control" value="" placeholder="Отчество">
                                    </div>
                                </div>
                                <div class="row form-group text-center">
                                    <div class="col-lg-6">
                                        <input type="text" name="tel" class="form-control" value="" placeholder="Телефон*" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name="email" class="form-control" value="" placeholder="E-mail*" required>
                                    </div>
                                </div>
                                <div class="row form-group text-center">
                                    <div class="col-lg-6">
                                        <input type="text" name="skype" class="form-control" value="" placeholder="Skype">
                                    </div>
                                    <div class="col-lg-6">
                                        <label><input type="checkbox" name="skype_conf" value="">
                                            Собеседование по Skype</label>
                                    </div>
                                </div>
                                <h4><strong>Название курса: </strong>ОЧНЫЙ КУРС "Стюардесса бизнес-авиации"</h4>
                                <h4><strong>Дата обучения: </strong>	13.06.2018</h4>
                                <h4><strong>Стоимость: </strong>	55000 руб</h4>
                                <p style="font-size:11px">1.	Настоящим я соглашаюсь с тем, что НОУ ДПО "Джет-сервис" может связываться со мной по электронной почте, смс, телефону и с помощью других средств связи в целях приглашения на обучение. Также размещать мое резюме в базе Стюардессы FreeLance<br>
                                    2.	Я согласен(а) на обработку моих персональных данных.<br>
                                    3.	Я прочитал(а) <a href="">Политику Конфиденциальности</a> и согласен(на) с ее положениями.<p>
                                <div class="col-md-12 my-1 text-center">
                                    <button class="btn btn-default btn-courses" name="admission_submit">Отправить заявку</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
