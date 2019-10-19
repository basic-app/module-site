<?php

use BasicApp\Helpers\Url;
use BasicApp\System\SystemEvents;
use BasicApp\Admin\AdminEvents;

SystemEvents::onPreSystem(function()
{
    helper(['block', 'menu']);
});

AdminEvents::onMainMenu(function($menu)
{
    if (BasicApp\Site\Controllers\Admin\Page::checkAccess())
    {
        $menu->items['pages'] = [
            'url'   => Url::createUrl('admin/page'),
            'label' => t('admin.menu', 'Pages'),
            'icon'  => 'fa fa-file-text'
        ];
    }

    if (BasicApp\Site\Controllers\Admin\Block::checkAccess())
    {
        $menu->items['blocks'] = [
            'url'   => Url::createUrl('admin/block'),
            'label' => t('admin.menu', 'Blocks'),
            'icon'  => 'fa fa-th'
        ];
    }

    if (BasicApp\Site\Controllers\Admin\Menu::checkAccess())
    {
        $menu->items['menu'] = [
            'url' => Url::createUrl('admin/menu'),
            'label' => t('admin.menu', 'Menu'),
            'icon' => 'fa fa-list-ul'
        ];
    }
});