<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

$navigation->setFromArray([
    [
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],

    [
        'title' => 'Главная',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '#',
        'id'    => 'main_page',
    ],

    [
        'title' => 'Статьи',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '#',
        'id'    => 'articles',
    ],

    [
        'title' => 'Курсы',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '#',
        'id'    => 'courses',
    ],
    [
        'title' => 'Обучения',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '#',
        'id'    => 'coursess',
    ],

    [
        'title' => 'Дистанциионные обучения',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '#',
        'id'    => 'dist_courses',
    ],

    [
        'title' => 'База резюме',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '#',
        'id'    => 'resumes',
    ],

    // Examples
    // [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fa fa-user')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \App\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
	//		      ));
    //
	//		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
    // ]
]);