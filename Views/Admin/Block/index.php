<?php

use CodeIgniter\Events\Events;
use BasicApp\Site\Models\BlockModel;

require __DIR__ . '/_common.php';

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => classic_url('admin/block/create', ['returnUrl' => 'admin/block']), 
	'label' => t('admin.menu', 'Add Block'), 
	'icon' => 'fa fa-plus',
	'linkOptions' => [
		'class' => 'btn btn-success'
	]	
];

$rows = [];

foreach($elements as $model)
{
    $rows[] = app_view('BasicApp\Site\Admin\Block\_row', ['model' => $model]);
}

$event = new StdClass;

$event->columns = [
    ['content' => BlockModel::label('block_id'), 'preset' => 'id small'],
    ['content' => BlockModel::label('block_created_at'), 'preset' => 'medium'],
    ['content' => BlockModel::label('block_uid')]
];

Events::trigger('admin_block_table_head', $event);

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