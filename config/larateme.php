<?php
return [
    'appearance' => [
        'version' => '.001',
        'dashboard' => 1,
        /*
         * Supported values skin1/skin2/skin3/skin4/skin5/skin6
         */
        'skin' => 'skin1',

        'customizer' => false, // Work in Progress
        /*
         * The direction of the dashboard.
         */
        'dir' => 'ltr',
        /*
         * The header items that will be rendered.
         */
        'header' => [
            'right' => [
                'larateme::partials.header.languages',
                'larateme::partials.header.block_search',
                'larateme::partials.header.block_user_profile',

            ],
            'left' => [
                'larateme::partials.header.notifications',
                'larateme::partials.header.messages',
            ],
        ],
        /*
         * The sidebar items that will be rendered.
         */
        'sidebar' => [
            'items' => [
                'larateme::partials.sidebar.user-panel',
                'larateme::partials.sidebar.items',
            ],
        ],
        /*
         * Site Overall Layout
         * Supported values are
         * 'boxed','dark','horizontal','horizontal-fullwidth','iconbar',
         * 'light-sidebar','ltr','mini-sidebar','overlay','rtl',
         */
        'layout' => [
            'light-sidebar'
        ],

    ],
    'urls' => [
        /*
        |--------------------------------------------------------------------------
        | URLs
        |--------------------------------------------------------------------------
        |
        | Register here the dashboard main urls, base, logout, login, etc...
        | The options that can be nullable is register and password_request meaning that it can be disabled.
        |
        */
        'base' => '/',
        'logout' => 'logout',
        'login' => 'login',
        'register' => 'register',
        'password_request' => 'password/reset',
        'password_email' => 'password/email',
        'password_reset' => 'password/reset',
    ],
    'images' => [
        'logo_icon' => '/images/logo-icon.png',
        'logo' => '/images/logo.png',
        'logo-dark' => '/images/logo-dark.png',
        'logo-light' => '/images/logo-lite.png',
    ],
];