@extends('layouts.app')

@section('content')
    <div class="container align">
        {!! Breadcrumbs::render('register') !!}
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
                                <select name="role_id" id="reg"
                                        class="form-control custom-select reg">
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
                {{-- Меняемая часть --}}
                <div id="regForm"></div>
                {{-- Меняемая часть END --}}
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

    <div id="regFormResources" style="display: none;">
        <div class="f">
            {{-- Стюардессы --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label><input type="checkbox" name="in_base" value="">
                                Также размещать мое резюме в базе.
                                Впоследствии эту опцию можно менять в личном
                                кабинете</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <input name="password" type="password" class="form-control"
                                   value="" placeholder="Пароль">
                        </div>
                        <div class="col-lg-6">
                            <input name="password2" type="password" class="form-control"
                                   value="" placeholder="Повторить пароль">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <input name="surname" type="text" required
                                   class="form-control" value="" placeholder="Фамилия">
                        </div>
                        <div class="col-lg-4">
                            <input name="name" type="text" required class="form-control"
                                   value="" placeholder="Имя">
                        </div>
                        <div class="col-lg-4">
                            <input name="patronymic" type="text" required
                                   class="form-control" value="" placeholder="Отчество">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <input type="email" name="admission_email"
                                   class="form-control" value="" placeholder="E-mail">
                        </div>
                        <div class="col-lg-6">
                            <input name="tel" type="text" required class="form-control"
                                   value="" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <input name="skype" type="text" required class="form-control"
                                   value="" placeholder="Skype">
                        </div>
                        <div class="col-lg-5">
                            <label><input type="checkbox" name="skype" value="">
                                Собеседование по Skype</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <input name="birth" type="text" required class="form-control"
                                   value="" placeholder="Год рождения">
                        </div>
                        <div class="col-lg-4">
                            <input name="height" type="text" required class="form-control"
                                   value="" placeholder="Рост, см">
                        </div>
                        <div class="col-lg-4">
                            <input name="weight" type="text" required class="form-control"
                                   value="" placeholder="Вес, кг">
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
                            <input name="education" type="text" required
                                   class="form-control" value=""
                                   placeholder="Образование">
                        </div>
                        <div class="col-lg-6">
                            <input name="experience" type="text" required
                                   class="form-control" value=""
                                   placeholder="Опыт работы в авиации">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <input name="lang_skills" type="text" required
                                   class="form-control" value=""
                                   placeholder="Знание иностранных языков">
                        </div>
                        <div class="col-lg-6">
                            <input name="city" type="text" required class="form-control"
                                   value="" placeholder="Город / регион">
                        </div>
                    </div>
                    {{-- Только у стюардесс и фрилансеров --}}
                    <div class="row form-group frsua">
                        <div class="col-lg-4">
                            <input name="id_cart" type="text" required
                                   class="form-control" value=""
                                   placeholder="ID/свидетельство б/п">
                        </div>
                        <div class="col-lg-4">
                            <input name="visa" type="text" required class="form-control"
                                   value="" placeholder="Открытые визы">
                        </div>
                        <div class="col-lg-4">
                            <input name="vs" type="text" required class="form-control"
                                   value="" placeholder="Тип ВС">
                        </div>
                    </div>
                    {{-- Только у стюардесс и фрилансеров END --}}
                    <div class="row form-group">
                        <div class="col-lg-12">
                            1. Настоящим я соглашаюсь с тем, что НОУ ДПО 'Джет-сервис'
                            может связываться со мной по электронной почте, смс, телефону
                            и с помощью других средств связи в целях приглашения на
                            обучение. Также размещать мое резюме в базе Стюардессы
                            FreeLance<br>
                            2. Я согласен(а) на обработку моих персональных данных.<br>
                            3. Я прочитал(а) Политику Конфиденциальности и согласен(на) с
                            ее положениями.<br>
                            <label>
                                <input type="checkbox" required name="agree" value="">
                                Я ознакомлен с условиями и согласен с правилами
                                пользования сайтом www...
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Стюардессы END--}}
        </div>
        <div class="s">
            {{-- Работодатель --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <input type="email" name="email" class="form-control" value=""
                                   required placeholder="E-mail">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <input name="password" type="password" class="form-control"
                                   value="" required placeholder="Пароль">
                        </div>
                        <div class="col-lg-6">
                            <input name="password2" type="password" class="form-control"
                                   value="" required placeholder="Повторить пароль">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <input name="name" type="text" class="form-control" value=""
                                   required placeholder="Имя">
                        </div>
                        <div class="col-lg-6">
                            <input name="company" type="text" class="form-control"
                                   value="" required placeholder="Название компании">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <input name="tel" type="text" class="form-control" required
                                   value="" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            1. Я согласен(а) на обработку моих персональных данных.<br>
                            2. Я прочитал(а) Политику Конфиденциальности и согласен(на) с
                            ее положениями.<br>
                            <label>
                                <input type="checkbox" name="agree" value="" required>
                                Я ознакомлен с условиями и согласен с правилами
                                пользования сайтом www...
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Работодатель END--}}
        </div>
    </div>

    <script>
        $('[name="role_id"]').on('change', function (e) {
            let val = $(this).val();
            let cont = $('#regForm');

            if (val == 1 || val == 2 || val == 3) {
                cont.html($('#regFormResources > .f').html())
            } else {
                cont.html($('#regFormResources > .s').html())
            }

            if (val != 1 && val != 2) {
                cont.find('.frsua').html('');
            }
        })
    </script>
@endsection
