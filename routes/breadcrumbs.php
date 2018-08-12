<?php


Breadcrumbs::register('home', function ($trail) {
    $trail->parent('home');
});

Breadcrumbs::register('personal', function ($trail) {
    $trail->parent('home');
    $trail->push('Personal', route('personal'));
});

Breadcrumbs::register('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Регистрация', route('register'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::register('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});