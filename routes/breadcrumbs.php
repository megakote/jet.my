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

Breadcrumbs::register('news', function ($trail) {
    $trail->parent('home');
    $trail->push('Новости', route('news'));
});

Breadcrumbs::register('courses', function ($trail, $title) {
    $trail->parent('home');
    $trail->push('Обучение', route('courses-list'));
    $trail->push($title);
});

Breadcrumbs::register('course', function ($trail, $title) {
    $trail->parent('home');
    $trail->push('Обучение', route('courses-list'));
    $trail->push($title);
});
Breadcrumbs::register('courses-list', function ($trail) {
    $trail->parent('home');
    $trail->push('Обучение');
});
Breadcrumbs::register('contacts', function ($trail) {
    $trail->parent('home');
    $trail->push('Контакты');
});

Breadcrumbs::register('about', function ($trail) {
    $trail->parent('home');
    $trail->push('О нас');
});
