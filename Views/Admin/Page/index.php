<?php

use BasicApp\Site\Models\Page;

require __DIR__ . '/_common.php';

unset($adminConfig->breadcrumbs[count($adminConfig->breadcrumbs) - 1]['url']);

$adminConfig->actionMenu[] = [
	'url' => classic_url('admin/page/create', ['returnUrl' => 'admin/page']), 
	'label' => t('admin.menu', 'Add Page'), 
	'icon' => 'plus',
	'linkOptions' => [
		'class' => 'btn btn-success'
	]
];

echo admin_theme_view('_table/begin');

?>

<thead>
    <tr>
        <th class="d-none d-sm-table-cell"><?= Page::fieldLabel('page_id', true);?></th>
        <th class="d-none d-md-table-cell"><?= Page::fieldLabel('page_created_at', true)?></th>        
        <th><?= Page::fieldLabel('page_url', true)?></th>
        <th class="d-none d-sm-table-cell"><?= Page::fieldLabel('page_name', true)?></th>
        <th class="d-none d-lg-table-cell"><?= Page::fieldLabel('page_published', true)?></th>
        <th colspan="2"></th>
    </tr>
</thead>

<tbody>

<?php foreach($elements as $row):?>

    <tr>
        <td class="d-none d-sm-table-cell text-right" style="width: 1%;"><?= $row->page_id;?></td>
        <td class="d-none d-md-table-cell"><?= $row->page_created_at;?></td>        
        <td class="process"><?= $row->page_url;?></td>
        <td class="d-none d-sm-table-cell"><?= $row->page_name;?></td>
        <td class="d-none d-lg-table-cell"><?= $row->formattedPublished;?></td>
        <td style="width: 1%; padding-left: 10px;">

            <?= PHPTheme::widget('tableButtonUpdate', [
                'url' => classic_url('admin/page/update' , ['id' => $row->page_id]),
                'label' => t('admin', 'Update')
            ]);?>

        </td>
        <td style="width: 1%; padding-left: 10px; padding-right: 20px;">
        	
            <?= PHPTheme::widget('tableButtonDelete', [
                'url' => classic_url('admin/page/delete', ['id' => $row->page_id]),
                'label' => t('admin', 'Delete')
            ]);?>

        </td>
    </tr>

<?php endforeach;?>

</tbody>

<?php

echo admin_theme_view('_table/end');