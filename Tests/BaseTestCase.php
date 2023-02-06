<?php

namespace xxallanxx\Menus\Tests;

use Collective\Html\HtmlServiceProvider;
use xxallanxx\Menus\MenusServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class BaseTestCase extends OrchestraTestCase
{
    public function setUp() : void
    {
        parent::setUp();

        // $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlServiceProvider::class,
            MenusServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('menus', [
            'styles' => [
                'navbar' => \xxallanxx\Menus\Presenters\Bootstrap\NavbarPresenter::class,
                'navbar-right' => \xxallanxx\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
                'nav-pills' => \xxallanxx\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
                'nav-tab' => \xxallanxx\Menus\Presenters\Bootstrap\NavTabPresenter::class,
                'sidebar' => \xxallanxx\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
                'navmenu' => \xxallanxx\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
            ],

            'ordering' => false,
        ]);
    }
}
