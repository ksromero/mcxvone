<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Navigation Menu
    |--------------------------------------------------------------------------
    |
    | This array is for Navigation menus of the backend.  Just add/edit or
    | remove the elements from this array which will automatically change the
    | navigation.
    |
    */

    // SIDEBAR LAYOUT - MENU

    'sidebar' => [
        [
            'title' => 'Dashboard',
            'link'  => '/admin',
            'active' => 'admin',
            'icon'  => 'icon-fa icon-fa-dashboard',
        ],
        [
            'title' => 'Customer List Module',
            'link'  => 'admin/customer-list-module',
            'active' => 'admin/customer-list-module',
            'icon'  => 'icon-fa icon-fa-users',
        ],
        [
            'title' => 'Customer Application',
            'link'  => 'admin/customer-application',
            'active' => 'admin/customer-application',
            'icon'  => 'icon-fa icon-fa-user',
        ],
                [
            'title' => 'Inventory List Module',
            'link'  => 'admin/inventory-list-module',
            'active' => 'admin/inventory-list-module',
            'icon'  => 'icon-fa icon-fa-tasks',
        ],
        [
            'title' => 'Computation System',
            'link'  => 'admin/computation-system',
            'active' => 'admin/computation-system',
            'icon'  => 'icon-fa icon-fa-calculator',
        ],
        [
            'title' => 'Credit Investigation Report',
            'link'  => 'admin/credit-investigation-report',
            'active' => 'admin/credit-investigation-report',
            'icon'  => 'icon-fa icon-fa-tasks',
        ],
        [
            'title' => 'Users',
            'link'  => '#',
            'active' => 'admin/users*',
            'icon'  => 'icon-fa-user',
            'children' => [
                [
                    'title' => 'All Users',
                    'link'  => '/admin/users',
                    'active' => 'admin/users',
                ],
                [
                    'title' => 'User Profile',
                    'link'  => '/admin/users/1',
                    'active' => 'admin/users/*',
                ]
            ]
        ],
        [
            'title' => 'Settings',
            'link' => '#',
            'active' => 'admin/settings*',
            'icon' => 'icon-fa icon-fa-cogs',
            'children' => [
                [
                    'title' => 'Social',
                    'link' => '/admin/settings/social',
                    'active' => 'admin/settings/social',
                ],
                [
                    'title' => 'Mail Driver',
                    'link' => 'admin/settings/mail',
                    'active' => 'admin/settings/mail*',
                ],
            ]
        ],
    ],

    // HORIZONTAL MENU LAYOUT -  MENU

    'horizontal' => [
        [
            'title' => 'Dashboard',
            'link'  => '/admin',
            'active' => 'admin',
            'icon'  => 'fa fa-dashboard',
        ],
        [
            'title' => 'Settings',
            'link'  => '/admin/settings',
            'active' => 'admin/settings*',
            'icon'  => 'fa fa-cogs',
        ],
        [
            'title' => 'Users',
            'link'  => '#',
            'active' => 'admin/users*',
            'icon'  => 'fa fa-user',
            'children' => [
                [
                    'title' => 'All Users',
                    'link'  => '/admin/users',
                    'active' => 'admin/users',
                ],
                [
                    'title' => 'User Profile',
                    'link'  => '/admin/users/1',
                    'active' => 'admin/users/*',
                ]
            ]
        ],
    ]
];
