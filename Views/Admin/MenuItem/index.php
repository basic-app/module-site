<?php

use CodeIgniter\Events\Events;
use BasicApp\Site\Models\MenuItemModel;

require __DIR__ . '/_common.php';

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => classic_url('admin/menuItem/create', [
        'parentId' => $parentId,
		'returnUrl' => classic_uri_string(),
		'link_user_id' => $parentId
	]),
	'label' => t('admin', 'Create'), 
	'icon' => 'plus',
	'linkOptions' => [
		'class' => 'btn btn-success'
	]	
];

$rows = [];

foreach($elements as $model)
{
    $rows[] = app_view('BasicApp\Site\Admin\MenuItem\_row', ['model' => $model]);
}

$event = new StdClass;

$event->columns = [
    ['content' => MenuItemModel::fieldLabel('menu_id'), 'preset' => 'id small'],
    ['content' => MenuItemModel::fieldLabel('menu_created_at'), 'preset' => 'medium'],
    ['content' => MenuItemModel::fieldLabel('menu_url'), 'preset' => 'small'],
    ['content' => MenuItemModel::fieldLabel('menu_name')],
    ['content' => MenuItemModel::fieldLabel('menu_sort'), 'preset' => 'small']
];

Events::trigger('admin_menu_item_table_head', $event);

$event->columns[] = ['options' => ['colspan' => 2]];

echo PHPTheme::widget('table', [
    'head' => [
        'columns' => $event->columns
    ],
    'rows' => $rows
]);

if ($pager)
{
    echo $pager->links('default', 'bootstrap4');
}