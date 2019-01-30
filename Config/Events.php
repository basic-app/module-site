<?php

use CodeIgniter\Events\Events;

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
