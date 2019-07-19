<?php

use CodeIgniter\Events\Events;
use BasicApp\Site\Models\PageModel;
use BasicApp\Helpers\Url;

require __DIR__ . '/_common.php';

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
	'url' => Url::returnUrl('admin/page/create'), 
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
            $model = PageModel::createEntity();
        }

        return [
            $this->createColumn([
                'attribute' => 'page_id',
                'header' => $model->label('page_id')
            ])->displaySmall(),
            $this->createColumn([
                'attribute' => 'page_created_at',
                'header' => $model->label('page_created_at')
            ])->displayMedium(),
            $this->createColumn([
                'attribute' => 'page_url',
                'header' => $model->label('page_url')
            ])->displaySmall(),
            $this->createColumn([
                'attribute' => 'page_name',
                'header' => $model->label('page_name')
            ]),
            $this->createBooleanColumn([
                'attribute' => 'page_published',
                'header' => $model->label('page_published')
            ])->displayLarge(),
            $this->createUpdateLinkColumn([
                'url' => Url::returnUrl('admin/page/update', ['id' => $model->getPrimaryKey()])
            ]),
            $this->createDeleteLinkColumn([
                'url' => Url::returnUrl('admin/page/delete', ['id' => $model->getPrimaryKey()])
            ])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'bootstrap4');
}