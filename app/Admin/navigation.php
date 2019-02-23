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
// AdminSection::addMenuPage(\App\User::class);

/*AdminNavigation::addPage(\App\User::class)->setFromArray([
    [
        'title' => "Users",
        'icon' => 'fa fa-credit-card',
        'priority' =>'1000',
        'pages' => [
            (new Page(\App\User::class))
                ->setIcon('fa fa-fax')
                ->setPriority(0),
        ]
    ],
]);

AdminNavigation::addPage(\App\Crime::class)->setFromArray([
    [
        'title' => "Crimes",
        'icon' => 'fa fa-credit-card',
        'priority' =>'1000',
        'pages' => [
            (new Page(\App\Crime::class))
                ->setIcon('fa fa-fax')
                ->setPriority(0),
        ]
    ],
]);*/

return [
    [
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],

    [
        'title' => 'Information',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.information'),
    ],

    [
        'title' => "Crimes",
        'icon' => 'fa fa-credit-card',
        'priority' =>'1000',
        'pages' => [
            (new Page(\App\Crime::class))
                ->setIcon('fa fa-fax')
                ->setPriority(0),
        ]
    ],

    [
        'title' => "Users",
        'icon' => 'fa fa-credit-card',
        'priority' =>'1000',
        'pages' => [
            (new Page(\App\User::class))
                ->setIcon('fa fa-fax')
                ->setPriority(0),
        ]
    ],

    [
        'title' => "fundamentalSettings",
        'icon' => 'fa fa-credit-card',
        'priority' =>'1000',
        'pages' => [
            (new Page(\App\fundamentalSetting::class))
                ->setIcon('fa fa-fax')
                ->setPriority(0),
        ]
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
];