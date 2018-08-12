@extends('layouts.app')

@section('content')


    <div class="container align">
        {{ Breadcrumbs::render('register') }}
        <div class="reg1">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label>Хочу зарегистрироваться как:</label>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-control custom-select reg" id="reg"
                                        name="role_id">
                                    <option value="1" selected>Стюардесса бизнес-авиации
                                    </option>
                                    <option value="2">Стюардесса Freelance</option>
                                    <option value="3">Кандидат на обучение</option>
                                    <option value="4">Работодатель</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label><input type="checkbox" name="in_base" value="">
                                    Также размещать мое резюме в базе.
                                    Впоследствии эту опцию можно менять в личном кабинете</label>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <input type="text" name="email" class="form-control"
                                       value="" placeholder="Логин (email)" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <input type="password" name="password"
                                       class="form-control" value="" placeholder="Пароль"
                                       required>
                            </div>
                            <div class="col-lg-6">
                                <input type="password" name="passwordre"
                                       class="form-control" value=""
                                       placeholder="Повторить пароль" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <input name="surname" class="form-control" value=""
                                       placeholder="Фамилия" required>
                            </div>
                            <div class="col-lg-4">
                                <input name="name" class="form-control" value=""
                                       placeholder="Имя" required>
                            </div>
                            <div class="col-lg-4">
                                <input name="patronymic" class="form-control" value=""
                                       placeholder="Отчество" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <input name="tel" class="form-control" type="tel" value=""
                                       placeholder="Телефон" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <input type="text" name="skype" class="form-control" value=""
                                       placeholder="Skype">
                            </div>
                            <div class="col-lg-5">
                                <label><input type="checkbox" name="skype_conf" value="">
                                    Собеседование по Skype</label>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <input name="birth" class="form-control" type="date" value=""
                                       placeholder="Дата рождения">
                            </div>
                            <div class="col-lg-4">
                                <input name="height" class="form-control" type="text" value=""
                                       placeholder="Рост, см">
                            </div>
                            <div class="col-lg-4">
                                <input name="weight" class="form-control" type="text" value=""
                                       placeholder="Вес, кг">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-10">
                                <label>Фотография (JPEG, PNG, GIF) <input type="file"
                                                                          name="avatar"></label>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <input name="education" class="form-control" value=""
                                       placeholder="Образование">
                            </div>
                            <div class="col-lg-6">
                                <input name="experience" class="form-control" value=""
                                       placeholder="Опыт работы в авиации">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <input name="lang_skills" class="form-control" value=""
                                       placeholder="Знание иностранных языков">
                            </div>
                            <div class="col-lg-6">
                                <input name="city" class="form-control" value=""
                                       placeholder="Город / регион">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <input name="id_cart" class="form-control" value=""
                                       placeholder="ID/свидетельство б/п">
                            </div>
                            <div class="col-lg-4">
                                <input name="visa" class="form-control" value=""
                                       placeholder="Открытые визы">
                            </div>
                            <div class="col-lg-4">
                                <input name="vs" class="form-control" value=""
                                       placeholder="Тип ВС">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-12">
                                1. Настоящим я соглашаюсь с тем, что НОУ ДПО 'Джет-сервис'
                                может связываться со мной по электронной почте, смс,
                                телефону и с помощью других средств связи в целях
                                приглашения на обучение. Также размещать мое резюме в базе
                                Стюардессы FreeLance<br>
                                2. Я согласен(а) на обработку моих персональных
                                данных.<br>
                                3. Я прочитал(а) Политику Конфиденциальности и
                                согласен(на) с ее положениями.<br>
                                <label>
                                    <input type="checkbox" name="agree" value="">
                                    Я ознакомлен с условиями и согласен с правилами
                                    пользования сайтом www...
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 my-5 text-center">
                        <button class="btn btn-default btn-courses" type="submit">
                            Регистрация
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
