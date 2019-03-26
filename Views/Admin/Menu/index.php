<?php

require __DIR__ . '/_common.php';

use CodeIgniter\Events\Events;
use BasicApp\Site\Models\MenuModel;

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => classic_url('admin/menu/create', [
		'returnUrl' => classic_uri_string(),
		'link_user_id' => $parentId
	]),
	'label' => t('admin', 'Create'), 
	'icon' => 'fa fa-plus',
	'linkOptions' => [
		'class' => 'btn btn-success'
	]	
];

$rows = [];

foreach($elements as $model)
{
    $rows[] = app_view('BasicApp\Site\Admin\Menu\_row', ['model' => $model]);
}

$event = new StdClass;

$event->columns = [
    ['content' => MenuModel::label('menu_id'), 'preset' => 'id small'],
    ['content' => MenuModel::label('menu_created_at'), 'preset' => 'medium'],
    ['content' => MenuModel::label('menu_uid'), 'preset' => 'small'],
    ['content' => MenuModel::label('menu_name')],
    ['content' => '&nbsp;']
];

Events::trigger('admin_menu_table_head', $event);

$event->columns[] = ['options' => ['colspan' => 2]];

echo admin_theme_widget('table', [
    'head' => [
        'columns' => $event->columns
    ],
    'rows' => $rows
]);

if ($pager)
{
    echo $pager->links('default', 'bootstrap4');
}