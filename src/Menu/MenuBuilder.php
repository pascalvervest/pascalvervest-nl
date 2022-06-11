<?php

declare(strict_types=1);

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;

class MenuBuilder
{
    private FactoryInterface $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createAdminMainMenu(array $options): ItemInterface
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-pills flex-column mb-auto');

        $menu->addChild('dashboard', [
            'route' => 'app_admin_index',
            'linkAttributes' => [
                'class' => 'nav-link text-white',
            ],
        ]);

        $menu->addChild('blog', [
            'route' => 'app_adminblog_index',
            'linkAttributes' => [
                'class' => 'nav-link text-white',
            ],
        ]);

        return $menu;
    }

    public function createAdminUserMenu(array $options): ItemInterface
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'dropdown-menu dropdown-menu-dark text-small shadow');

        $menu->addChild('settings', [
            'route' => 'app_admin_index',
            'linkAttributes' => [
                'class' => 'dropdown-item',
            ],
        ]);

        $menu->addChild('logout', [
            'route' => 'app_logout',
            'linkAttributes' => [
                'class' => 'dropdown-item',
            ],
        ]);

        return $menu;
    }
}