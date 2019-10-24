<?php

use BasicApp\Site\Models\BlockModel;
use BasicApp\Helpers\Url;

require __DIR__ . '/_common.php';

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => Url::returnUrl('admin/block/create'), 
	'label' => t('admin', 'Create'), 
	'icon' => 'fa fa-plus',
	'linkAttributes' => [
		'class' => 'btn btn-success'
	]	
];

$adminTheme = service('adminTheme');

echo $adminTheme->table([
    'labels' => [
        BlockModel::fieldLabel('block_id'),
        BlockModel::fieldLabel('block_created_at'),
        BlockModel::fieldLabel('block_uid'),
        '',
        ''
    ],
    'elements' => $elements,
    'columns' => function($model) {
        return [
            $this->createColumn(['field' => 'block_id'])->number()->displaySmall(),
            $this->createColumn(['field' => 'block_created_at'])->displayMedium(),
            $this->createColumn(['field' => 'block_uid'])->success(),
            $this->createUpdateLinkColumn(['action' => 'admin/block/update']),
            $this->createDeleteLinkColumn(['action' => 'admin/block/delete'])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'adminTheme');
}