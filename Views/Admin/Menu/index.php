<?php

require __DIR__ . '/_common.php';

use CodeIgniter\Events\Events;
use BasicApp\Site\Models\MenuModel;
use BasicApp\Helpers\Url;

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => Url::returnUrl('admin/menu/create', [
		'link_user_id' => $parentId
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
            $model = MenuModel::createEntity();
        }
        
        return [
            $this->createColumn(['attribute' => 'menu_id'])->number()->displaySmall(),
            $this->createColumn(['attribute' => 'menu_created_at'])->displayMedium(),
            $this->createColumn(['attribute' => 'menu_uid']),
            $this->createColumn(['attribute' => 'menu_name'])->displaySmall(),
            $this->createLinkColumn([
                'label' => t('admin.menu', 'Items'), 
                'url' => Url::createUrl('admin/menu-item', ['item_menu_id' => $model->getPrimaryKey()])
            ]),
            $this->createUpdateLinkColumn([
                'url' => Url::returnUrl('admin/menu/update', ['id' => $model->getPrimaryKey()])
            ]),
            $this->createDeleteLinkColumn([
                'url' => Url::returnUrl('admin/menu/delete', ['id' => $model->getPrimaryKey()])
            ])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'bootstrap4');
}