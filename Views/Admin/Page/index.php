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
        PageModel::fieldLabel('page_id'),
        PageModel::fieldLabel('page_created_at'),
        PageModel::fieldLabel('page_url'),
        PageModel::fieldLabel('page_name'),
        PageModel::fieldLabel('page_published'),
        '',
        ''
    ],
    'elements' => $elements,
    'columns' => function($model) {
        return [
            $this->createColumn(['attribute' => 'page_id'])->displaySmall()->number(),
            $this->createColumn(['attribute' => 'page_created_at'])->displayMedium(),
            $this->createColumn(['attribute' => 'page_url'])->success()->displaySmall(),
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