<?php

use BasicApp\Site\Models\MenuItem;

require __DIR__ . '/_common.php';

unset($adminConfig->breadcrumbs[count($adminConfig->breadcrumbs) - 1]['url']);

$adminConfig->actionMenu[] = [
	'url' => classic_url('admin/menuItem/create', [
        'parentId' => $parentId,
		'returnUrl' => classic_uri_string(),
		'link_user_id' => $parentId
	]),
	'label' => t('admin', 'Create'), 
	'icon' => 'plus',
	'linkOptions' => [
		'class' => 'btn btn-success'
	]	
];

echo admin_theme_view('_table/begin');

?>

<thead>
    <tr>
        <th class="d-none d-sm-table-cell">#</th>
        <th class="d-none d-md-table-cell"><?= MenuItem::fieldLabel('item_created_at');?></th>
        <th><?= MenuItem::fieldLabel('item_url');?></th>
        <th><?= MenuItem::fieldLabel('item_name');?></th>
        <th><?= MenuItem::fieldLabel('item_sort');?></th>
        <th colspan="2"></th>
    </tr>
</thead>

<tbody>

<?php foreach($elements as $model):?>

    <tr>
        <td class="d-none d-sm-table-cell text-right" style="width: 1%;"><?= $model->item_id;?></td>
        <td class="d-none d-md-table-cell"><?= date('Y-m-d', strtotime($model->item_created_at));?></td>
        <td class="process"><?= $model->item_url;?></td>
        <td><?= $model->item_name;?></td>
        <td><?= $model->item_sort;?></td>

        <td style="width: 1%; padding-left: 10px;">

            <?= PHPTheme::widget('tableButtonUpdate', [
                'url' => classic_url('admin/menuItem/update', ['id' => $model->item_id, 'returnUrl' => classic_uri_string()]),
                'label' => t('admin', 'Update')
            ]);?>            

        </td>
        <td style="width: 1%; padding-left: 10px; padding-right: 20px;">

            <?= PHPTheme::widget('tableButtonDelete', [
                'url' => classic_url('admin/menuItem/delete', ['id' => $model->item_id, 'returnUrl' => classic_uri_string()]),
                'label' => t('admin', 'Delete')
            ]);?>            
        
        </td>
    
    </tr>

<?php endforeach;?>

</tbody>

<?php

echo admin_theme_view('_table/end');