<?php

use BasicApp\Helpers\Url;
use BasicApp\Helpers\CliHelper;
use BasicApp\System\SystemEvents;
use BasicApp\Admin\AdminEvents;

SystemEvents::onPreSystem(function()
{
    helper(['block', 'menu']);
});

AdminEvents::onMainMenu(function($event)
{
    if (BasicApp\Site\Controllers\Admin\Page::checkAccess())
    {
        $event->items['pages'] = [
            'url'   => Url::createUrl('admin/page'),
            'label' => t('admin.menu', 'Pages'),
            'icon'  => 'fa fa-file-text'
        ];
    }

    if (BasicApp\Site\Controllers\Admin\Block::checkAccess())
    {
        $event->items['blocks'] = [
            'url'   => Url::createUrl('admin/block'),
            'label' => t('admin.menu', 'Blocks'),
            'icon'  => 'fa fa-th'
        ];
    }

    if (BasicApp\Site\Controllers\Admin\Menu::checkAccess())
    {
        $event->items['menu'] = [
            'url' => Url::createUrl('admin/menu'),
            'label' => t('admin.menu', 'Menu'),
            'icon' => 'fa fa-list-ul'
        ];
    }
});

SystemEvents::onSeed(function($event)
{
    if ($event->reset)
    {
        $db = db_connect();

        if (!$db->simpleQuery('TRUNCATE TABLE pages'))
        {
            throw new Exception($db->error());
        }

        CliHelper::message('Truncated: pages');

        if (!$db->simpleQuery('TRUNCATE TABLE blocks'))
        {
            throw new Exception($db->error());
        }

        CliHelper::message('Truncated: blocks');

        if (!$db->simpleQuery('TRUNCATE TABLE menu_item'))
        {
            throw new Exception($db->error());
        }

        CliHelper::message('Truncated: menu_item');

        $db->simpleQuery('SET FOREIGN_KEY_CHECKS = 0');

        $result = $db->simpleQuery('TRUNCATE TABLE `menu`');

        $db->simpleQuery('SET FOREIGN_KEY_CHECKS = 1');

        if (!$result)
        {
            throw new Exception($db->error());
        }

        CliHelper::message('Truncated: menu');
    }

    $seeder = Config\Database::seeder();

    $seeder->call(BasicApp\Site\Database\Seeds\SiteSeeder::class);
});