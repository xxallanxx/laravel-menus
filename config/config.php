<?php

return [

    'styles' => [
        'navbar' => \xxallanxx\Menus\Presenters\Bootstrap\NavbarPresenter::class,
        'navbar-right' => \xxallanxx\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
        'nav-pills' => \xxallanxx\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
        'nav-tab' => \xxallanxx\Menus\Presenters\Bootstrap\NavTabPresenter::class,
        'sidebar' => \xxallanxx\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
        'navmenu' => \xxallanxx\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
        'adminlte' => \xxallanxx\Menus\Presenters\Admin\AdminltePresenter::class,
        'zurbmenu' => \xxallanxx\Menus\Presenters\Foundation\ZurbMenuPresenter::class,
    ],

    'ordering' => false,

];
