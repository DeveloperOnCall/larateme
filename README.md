![banner](https://user-images.githubusercontent.com/3272625/50597059-ad9d4200-0ed8-11e9-9016-46429572c707.jpg)

# Laravel Larateme Template
> A full featured admin panel for your laravel applications.

1. [Introduction](#intro)
2. [Installation](#installation)
3. [Overriding Laravel Authentication Views](#larateme-auth)
4. [Configuration](#larateme-config)
5. [Blade Templates (Layout, Component and Partial Views)](#larateme-components)
    1. [Main Layout](#larateme-components-layout)
    2. [Page Component](#larateme-components-page)
    3. [Box Component](#larateme-components-box)
    4. [Table Box Component](#larateme-components-table-box)
    5. [Info Box Component](#larateme-components-info-box)
6. [[Optional] Overriding the default views](#larateme-views)

<a name="intro"></a>
## 1. Introduction
This package depend on other packages under the hood, these packages are:
* [Laravel Breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs)
* [Laracasts Flash](https://github.com/laracasts/flash)

<a name="installation"></a>
## 2. Installation
You can install `larateme` using composer cli by running:
```bash
composer require developeroncall/larateme
```
Then run the following command to adding the template assets to your project.
```bash
php artisan larateme:install
```


<a name="larateme-config"></a>
## 4. Configuration
After install two configuration files will be published `config/larateme.php` and `config/breadcrumbs.php`.

```
<?php

// config/larateme.php

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
                'larateme::partials.header.block_search',
                'larateme::partials.header.languages',
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
        'layout' => 'light-sidebar',

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
        'logo-icon' => '/images/logo-icon.png',
        'logo-light-icon' => '/images/logo-light-icon.png',
        'logo' => '/images/logo.png',
        'logo-dark' => '/images/logo-dark.png',
        'logo-light' => '/images/logo-lite.png',
        'logo-text' => '/images/logo-text.png',
        'logo-light-text' => '/images/logo-lite-text.png',
    ],
];
```
You can take a look at [Laravel Breadcrumbs Documentation](https://github.com/davejamesmiller/laravel-breadcrumbs#custom-templates) for the configuration details about `config/breadscrumbs.php` file.

<a name="larateme-components"></a>
## 5. Blade Templates (Layout, Component and Partial Views)
This package include a layout and components that wraps the most of larateme elements. 
<a name="larateme-components-layout"></a>
### 1. Main Layout
This is the main Think of the main layout as a container for including your content within larateme header and sidebar. The following is an example of using the `larateme::layout.main`:
```
@extends('larateme::layout')

@section('content')
   {-- Content--} 
@endsection
```
> Note: the content will be wrapped automatically within `<div class="main-wrapper"></div>`.

<a name="larateme-components-page"></a>
### 2. Page Component
The page component is a container for your content that contain `<section class="content-header"></section>` for holding title and breadcrumbs and `<section class="content"></section>` for holding the page content.
Example:
```
@component('larateme::page', ['title' => 'Home', 'sub_title' => 'Main page...', 'breadcrumb' => 'BREADCRUMB_NAME'])
   The page content... 
@endcomponent
```
Notes:
> The options `sub_title` and `breadcrumb` are optional.

> The page component is responsible for displaying the [flash messages](https://github.com/laracasts/flash).

> The BREADCRUMB_NAME is the name of your [defined breadcrumb](https://github.com/davejamesmiller/laravel-breadcrumbs#2-define-your-breadcrumbs) in `routes/breadcrumbs.php` file.

Example with sending data to breadcrmbs:
```
@component('angielte::page', ['title' => 'Home', 'breadcrumb' => ['home', $user]])
 The page content...
@endcomponent
```
<a name="larateme-components-card"></a>
### 3. Card Component
The card component is a wrapper bootstrap card.
Example code:
```
@component('larateme::card')
    You're logged in!
@endcomponent
```
A more advanced example:
```
@component('larateme::card', ['title' => 'Card component', 'card_text' => 'Hello World])
    @slot('tools')
        <button class="btn btn-warning">Button</button>
    @endslot
    <p>
        Box component contents...
    </p>
    @slot('footer')
        <p>Box footer</p>
    @endslot
@endcomponent
```
> Note: the supported styles are `default`, `primary`, `info`, `warning`, `success` and `danger`.

<a name="larateme-components-table-box"></a>
### 4. Table Box Component
The table box component can be used to put a table directly within an angielte box component.
Example usage:
```
@component('larateme::table-box', ['collection' => $users])
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
@endcomponent
```
Note:

> The component will automatically render the pagination links.

> You don't need to handle empty collection by yourself, the view will display a helpful message if the collection is empty.

<a name="larateme-components-info-box"></a>
### 5. Info Box
The info box component is a wrapper for bootstrap info box
Example usage:
```
@include('larateme::info-box', [
    'icon_color' => 'blue',
    'icon' => 'thumbs-up',
    'text' => 'likes',
    'number' => '2000',
])
```
Or:
```
@include('larateme::info-box', [
    'style' => 'red',
    'icon' => 'heart',
    'text' => 'loves',
    'number' => '500000',
    'progress' => 70,
    'progress_description' => '70% of the people loved your project!',
])

```

<a name="larateme-views"></a>
## 6. [Optional] Overriding the default views
You are free to modify the package views, If you wish you can run the following command:
```
php artisan vendor:publish --tag=larateme-views
```
Now, you can edit the views in `resources/views/vendor/larateme`.
> **Note**: If you publish the package views it will not automatically use any future updates and bug fixes.

I will be creating components for most Bootstrap 4 elements and will update this package as time permits

