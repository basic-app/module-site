<?php

use CodeIgniter\Events\Events;
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
    'rows' => $elements,
    'columns' => function($model) {

        if (!$model)
        {
            $model = BlockModel::createEntity();
        }

        return [
            $this->createColumn([
                'attribute' => 'block_id',
                'header' => $model->label('block_id')
            ])->number()->displaySmall(),
            $this->createColumn([
                'attribute' => 'block_created_at',
                'header' => $model->label('block_created_at')
            ])->displayMedium(),
            $this->createColumn([
                'attribute' => 'block_uid',
                'header' => $model->label('block_uid')
            ]),
            $this->createUpdateLinkColumn([
                'url' => Url::returnUrl('admin/block/update', ['id' => $model->getPrimaryKey()])
            ]),
            $this->createDeleteLinkColumn([
                'url' => Url::returnUrl('admin/block/delete', ['id' => $model->getPrimaryKey()])
            ])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'bootstrap4');
}