<?php

use CodeIgniter\Events\Events;
use BasicApp\Site\Models\MenuItemModel;
use BasicApp\Helpers\Url;

require __DIR__ . '/_common.php';

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => Url::returnUrl('admin/menu-item/create', [
        'item_menu_id' => $parentId
	]),
	'label' => t('admin', 'Create'), 
	'icon' => 'fa fa-plus',
	'linkAttributes' => [
		'class' => 'btn btn-success'
	]	
];

$adminTheme = service('adminTheme');

echo $adminTheme->table([
    'labels' => [
        MenuItemModel::fieldLabel('item_id'),
        MenuItemModel::fieldLabel('item_created_at'),
        MenuItemModel::fieldLabel('item_url'),
        MenuItemModel::fieldLabel('item_name'),
        MenuItemModel::fieldLabel('item_sort'),
        MenuItemModel::fieldLabel('item_enabled'),
        '',
        ''
    ],
    'elements' => $elements,
    'columns' => function($model) {
        return [
            $this->createColumn(['field' => 'item_id'])->number()->displaySmall(),
            $this->createColumn(['field' => 'item_created_at'])->displayMedium(),
            $this->createColumn(['field' => 'item_url'])->success()->displaySmall(),
            $this->createColumn(['field' => 'item_name']),
            $this->createColumn(['field' => 'item_sort'])->number(),
            $this->createBooleanColumn(['field' => 'item_enabled']),
            $this->createUpdateLinkColumn(['action' => 'admin/menu-item/update']),
            $this->createDeleteLinkColumn(['action' => 'admin/menu-item/delete'])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'adminTheme');
}