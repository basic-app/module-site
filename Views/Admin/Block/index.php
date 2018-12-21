<?php

use BasicApp\Site\Models\Block;

require __DIR__ . '/_common.php';

unset($adminConfig->breadcrumbs[count($adminConfig->breadcrumbs) - 1]['url']);

$adminConfig->actionMenu[] = [
	'url' => classic_url('admin/block/create', ['returnUrl' => 'admin/block']), 
	'label' => t('admin.menu', 'Add Block'), 
	'icon' => 'plus',
	'linkOptions' => [
		'class' => 'btn btn-success'
	]	
];

echo admin_theme_view('_table/begin');

?>

<thead>
    <tr>
        <th class="d-none d-sm-table-cell"><?= Block::fieldLabel('block_id', true);?></th>
        <th class="d-none d-md-table-cell"><?= Block::fieldLabel('block_created_at', true)?></th>
        <th><?= Block::fieldLabel('block_uid', true)?></th>
        <th colspan="2"></th>
    </tr>
</thead>

<tbody>

<?php foreach($elements as $row):?>

    <tr>
        <td class="d-none d-sm-table-cell text-right" style="width: 1%;"><?= $row->block_id;?></td>
        <td class="d-none d-md-table-cell"><?= $row->block_created_at;?></td>
        <td class="process"><?= $row->block_uid;?></td>
        <td style="width: 1%; padding-left: 10px;">

        	<?= admin_theme_view('_widgets/button-update', [
        		'url' => classic_url('admin/block/update', ['id' => $row->block_id]),
        		'label' => t('admin', 'Update')
        	]);?>

        </td>
        <td style="width: 1%; padding-left: 10px; padding-right: 20px;"><?= admin_theme_view('_widgets/button-delete', [
            'url' => classic_url('admin/block/delete', ['id' => $row->block_id])]);?></td>
    </tr>

<?php endforeach;?>

</tbody>

<?php

echo admin_theme_view('_table/end');