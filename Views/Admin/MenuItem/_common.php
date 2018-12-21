<?php

use Modules\Site\Models\Menu;

$parent = (new Menu)->find((int) $parentId);

if (!$parent)
{
	throw new Exception('Menu not found.');
}

$adminConfig = config(Config\Custom\Admin::class);

$adminConfig->mainMenu['menu']['active'] = true;

$adminConfig->breadcrumbs[] = [
	'label' => t('admin.menu', 'Menu'), 
	'url' => ['/admin/menu']
];

$adminConfig->breadcrumbs[] = [
	'label' => $parent->menu_name, 
	'url' => classic_url('admin/menuItem', ['parentId' => $parent->menu_id])
];

$this->data['title'] = t('admin.menu', 'Menu');