<?php

$routes->add('page/(:any)', 'BasicApp\Site\Controllers\Page::view/$1');

$routes->add('admin/menu', 'BasicApp\Site\Controllers\Admin\Menu::index');
$routes->add('admin/menu/(:segment)', 'BasicApp\Site\Controllers\Admin\Menu::$1');

$routes->add('admin/menuItem', 'BasicApp\Site\Controllers\Admin\MenuItem::index');
$routes->add('admin/menuItem/(:segment)', 'BasicApp\Site\Controllers\Admin\MenuItem::$1');

$routes->add('admin/page', 'BasicApp\Site\Controllers\Admin\Page::index');
$routes->add('admin/page/(:segment)', 'BasicApp\Site\Controllers\Admin\Page::$1');

$routes->add('admin/block', 'BasicApp\Site\Controllers\Admin\Block::index');
$routes->add('admin/block/(:segment)', 'BasicApp\Site\Controllers\Admin\Block::$1');