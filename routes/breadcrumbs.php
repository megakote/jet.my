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