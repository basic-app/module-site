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
	'linkOptions' => [
		'class' => 'btn btn-success'
	]	
];

$adminTheme = service('adminTheme');

echo $adminTheme->table([
    'rows' => $elements,
    'columns' => function($model) {
       
        if (!$model)
        {
            $model = MenuItemModel::createEntity();
        }

        return [
            $this->createColumn(['attribute' => 'item_id'])->number()->displaySmall(),
            $this->createColumn(['attribute' => 'item_created_at'])->displayMedium(),
            $this->createColumn(['attribute' => 'item_url'])->displaySmall(),
            $this->createColumn(['attribute' => 'item_name']),
            $this->createColumn(['attribute' => 'item_sort'])->number(),
            $this->createBooleanColumn(['attribute' => 'item_enabled']),
            $this->createUpdateLinkColumn([
                'url' => Url::returnUrl('admin/menu-item/update', ['id' => $model->getPrimaryKey()])
            ]),
            $this->createDeleteLinkColumn([
                'url' => Url::returnUrl('admin/menu-item/delete', ['id' => $model->getPrimaryKey()])
            ])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'bootstrap4');
}