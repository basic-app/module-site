<?php

use CodeIgniter\Events\Events;
use Config\Database;
use BasicApp\Site\Models\PageModel;
use BasicApp\Site\Models\BlockModel;
use BasicApp\Site\Models\MenuModel;
use BasicApp\Site\Models\MenuItemModel;

Events::on('pre_system', function()
{
    helper(['block']);
});

Events::on('admin_main_menu', function($menu)
{
    $menu->items['pages'] = [
        'url'   => site_url('admin/page'),
        'label' => t('admin.menu', 'Pages'),
        'icon'  => 'fa fa-file-text'
    ];

    $menu->items['blocks'] = [
        'url'   => site_url('admin/block'),
        'label' => t('admin.menu', 'Blocks'),
        'icon'  => 'fa fa-th'
    ];

    $menu->items['menu'] = [
        'url' => site_url('admin/menu'),
        'label' => t('admin.menu', 'Menu'),
        'icon' => 'fa fa-list-ul'
    ];
});

Events::on('install', function()
{
	PageModel::install();
	BlockModel::install();
	MenuModel::install();
	MenuItemModel::install();
});
