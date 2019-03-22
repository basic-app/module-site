<?php

use CodeIgniter\Events\Events;

Events::on('pre_system', function()
{
    helper(['block', 'menu']);
});

Events::on('admin_main_menu', function($menu)
{
    if (BasicApp\Site\Controllers\Admin\Page::checkAccess())
    {
        $menu->items['pages'] = [
            'url'   => site_url('admin/page'),
            'label' => t('admin.menu', 'Pages'),
            'icon'  => 'fa fa-file-text'
        ];
    }

    if (BasicApp\Site\Controllers\Admin\Block::checkAccess())
    {
        $menu->items['blocks'] = [
            'url'   => site_url('admin/block'),
            'label' => t('admin.menu', 'Blocks'),
            'icon'  => 'fa fa-th'
        ];
    }

    if (BasicApp\Site\Controllers\Admin\Menu::checkAccess())
    {
        $menu->items['menu'] = [
            'url' => site_url('admin/menu'),
            'label' => t('admin.menu', 'Menu'),
            'icon' => 'fa fa-list-ul'
        ];
    }
});

Events::on('install', function()
{
	BasicApp\Site\Models\Install\PageModel::install();
	BasicApp\Site\Models\Install\BlockModel::install();
	BasicApp\Site\Models\Install\MenuModel::install();
});