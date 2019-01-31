<?php

use CodeIgniter\Events\Events;
use Config\Database;

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
	$db = Database::connect();

	$db->table('pages')->insert([
		'page_url' => 'index',
		'page_name' => 'Index',
		'page_text' => '<p>Index page text.</p>',
		'page_published' => 1
	]);
});
