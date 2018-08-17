<?php


Breadcrumbs::register('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

Breadcrumbs::register('personnel', function ($trail) {
    $trail->parent('home');
    $trail->push('Персонал', route('personnel'));
});

Breadcrumbs::register('persona', function ($trail, $user) {
    $trail->parent('home');
    $trail->push('Персонал', route('personnel'));
    $trail->push($user->name);
});

Breadcrumbs::register('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Регистрация', route('register'));
});

Breadcrumbs::register('login', function ($trail) {
    $trail->parent('home');
    $trail->push('Вход', route('login'));
});

Breadcrumbs::register('lk', function ($trail) {
    $trail->parent('home');
    $trail->push('Личный кабинет', route('lk'));
});

Breadcrumbs::register('page', function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title);
});