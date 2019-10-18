<?php

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
    'labels' => [
        PageModel::label('page_id'),
        PageModel::label('page_created_at'),
        PageModel::label('page_url'),
        PageModel::label('page_name'),
        PageModel::label('page_published'),
        '',
        ''
    ],
    'data' => $elements,
    'columns' => function($model) {
        return [
            $this->createColumn(['attribute' => 'page_id'])->displaySmall()->number(),
            $this->createColumn(['attribute' => 'page_created_at'])->displayMedium(),
            $this->createColumn(['attribute' => 'page_url'])->displaySmall(),
            $this->createColumn(['attribute' => 'page_name']),
            $this->createBooleanColumn(['attribute' => 'page_published'])->displayLarge(),
            $this->createUpdateLinkColumn(['action' => 'admin/page/update']),
            $this->createDeleteLinkColumn(['action' => 'admin/page/delete'])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'adminTheme');
}