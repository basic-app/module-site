<?php

use BasicApp\Site\Models\BlockModel;
use BasicApp\Helpers\Url;

require __DIR__ . '/_common.php';

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => Url::returnUrl('admin/block/create'), 
	'label' => t('admin', 'Create'), 
	'icon' => 'fa fa-plus',
	'linkOptions' => [
		'class' => 'btn btn-success'
	]	
];

$adminTheme = service('adminTheme');

echo $adminTheme->table([
    'labels' => [
        BlockModel::label('block_id'),
        BlockModel::label('block_created_at'),
        BlockModel::label('block_uid'),
        '',
        ''
    ],
    'data' => $elements,
    'columns' => function($model) {
        return [
            $this->createColumn(['attribute' => 'block_id'])->number()->displaySmall(),
            $this->createColumn(['attribute' => 'block_created_at'])->displayMedium(),
            $this->createColumn(['attribute' => 'block_uid']),
            $this->createUpdateLinkColumn(['action' => 'admin/block/update']),
            $this->createDeleteLinkColumn(['action' => 'admin/block/delete'])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'adminTheme');
}