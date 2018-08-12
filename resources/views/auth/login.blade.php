@extends('layouts.app')

@section('content')
    <div class="container align">
        <div class="row">
            <div class="col-md-12 hk_marg">
                <p><a href="/">ГЛАВНАЯ</a> / АВТОРИЗАЦИЯ</p>
            </div>
            <div class="col-md-12 my-5 h2_marg" style="text-align:center">
                <h2>Вход в личный кабинет</h2>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <input type="hidden" name="remember" checked>

            <div class="row col-md-8" style="margin:0 auto;">
                <div class="col-md-12">

                    <div class="row form-group text-center">
                        <div class="col-lg-6 {{ $errors->has('login') ? ' has-error' : '' }}">
                            <input name="login" class="form-control"
                                   value="{{ old('login') }}" placeholder="Логин" required
                                   autofocus>

                            @if ($errors->has('login'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input name="password" class="form-control"
                                   value="" placeholder="Пароль" type="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 my-1 text-center">
                        <button class="btn btn-default btn-courses"
                                name="admission_submit"><font
                                    style="vertical-align: inherit;">Вход</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row col-md-5" style="margin:0 auto;">
            <div class="col-md-12">
                <div class="blog-icons">
                    <div class="blog-share_block">
                        <a href="{{ route('password.request') }}"
                           class="entry-date pull-left">
                            <span class="entry-date published">Забыли пароль</span>
                        </a>
                        <a href="{{ route('register') }}"
                           class="entry-date pull-right">
                            <span class="entry-date published">Регистрация</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
