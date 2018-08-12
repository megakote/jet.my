<?php


Breadcrumbs::register('home', function ($trail) {
    $trail->push('home');
});

Breadcrumbs::register('personal', function ($trail) {
    $trail->parent('home');
    $trail->push('Personal', route('personal'));
});

Breadcrumbs::register('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Регистрация', route('register'));
});