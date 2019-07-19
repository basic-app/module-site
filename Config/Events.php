<?php

use BasicApp\Helpers\Url;

BasicApp\Core\CoreEvents::onPreSystem(function()
{
    helper(['block', 'menu']);
});

BasicApp\Admin\AdminEvents::onAdminMainMenu(function($menu)
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