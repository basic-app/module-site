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
    ['content' => PageModel::label('page_id'), 'preset' => 'id small'],
    ['content' => PageModel::label('page_created_at'), 'preset' => 'medium'],
    ['content' => PageModel::label('page_url'), 'preset' => 'small'],
    ['content' => PageModel::label('page_name')],
    ['content' => PageModel::label('page_published'), 'preset' => 'large']
];

Events::trigger('admin_page_table_head', $event);

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