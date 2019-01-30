<?php

use BasicApp\Site\Models\Menu;

$this->data['title'] = t('admin.menu', 'Menu');

$parent = (new Menu)->find((int) $parentId);

if (!$parent)
{
	throw new Exception('Menu not found.');
}

$this->data['mainMenu']['menu']['active'] = true;

$this->data['breadcrumbs'][] = [
	'label' => $this->data['title'], 
	'url' => ['/admin/menu']
];

$this->data['breadcrumbs'][] = [
	'label' => $parent->menu_name, 
	'url' => classic_url('admin/menuItem', ['parentId' => $parent->menu_id])
];
