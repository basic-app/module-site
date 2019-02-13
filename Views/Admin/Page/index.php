<?php

use CodeIgniter\Events\Events;
use BasicApp\Site\Models\PageModel;

require __DIR__ . '/_common.php';

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => classic_url('admin/page/create', ['returnUrl' => 'admin/page']), 
	'label' => t('admin.menu', 'Add Page'), 
	'icon' => 'fa fa-plus',
	'linkOptions' => [
		'class' => 'btn btn-success'
	]
];

$rows = [];

foreach($elements as $model)
{
    $rows[] = app_view('BasicApp\Site\Admin\Page\_row', ['model' => $model]);
}

$event = new StdClass;

$event->columns = [
    ['content' => PageModel::fieldLabel('page_id'), 'preset' => 'id small'],
    ['content' => PageModel::fieldLabel('page_created_at'), 'preset' => 'medium'],
    ['content' => PageModel::fieldLabel('page_url'), 'preset' => 'small'],
    ['content' => PageModel::fieldLabel('page_name')],
    ['content' => PageModel::fieldLabel('page_published'), 'preset' => 'large']
];

Events::trigger('admin_page_table_head', $event);

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