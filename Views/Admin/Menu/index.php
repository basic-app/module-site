<?php

require __DIR__ . '/_common.php';

use BasicApp\Site\Models\Menu;

unset($adminConfig->breadcrumbs[count($adminConfig->breadcrumbs) - 1]['url']);

$adminConfig->actionMenu[] = [
	'url' => classic_url('admin/menu/create', [
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
        <th class="d-none d-md-table-cell"><?= Menu::fieldLabel('menu_created_at');?></th>
        <th><?= Menu::fieldLabel('menu_uid');?></th>
        <th><?= Menu::fieldLabel('menu_name');?></th>
        <th>&nbsp;</th>
        <th colspan="2"></th>
    </tr>
</thead>

<tbody>

<?php foreach($elements as $model):?>

    <tr>
        <td class="d-none d-sm-table-cell text-right" style="width: 1%;"><?= $model->menu_id;?></td>
        <td class="d-none d-md-table-cell"><?= date('Y-m-d', strtotime($model->menu_created_at));?></td>
        <td class="process"><?= $model->menu_uid;?></td>
        <td><?= $model->menu_name;?></td>

        <td style="width: 1%; white-space: nowrap;"><a href="<?= classic_url('/admin/menuItem', ['parentId' => $model->menu_id]);?>"><?= t('admin.menu', 'Items');?></a></td>

        <td style="width: 1%; padding-left: 10px; padding-right: 10px; text-align: center;">

            <?= PHPTheme::widget('tableButtonUpdate', [
                'url' => classic_url('admin/menu/update', ['id' => $model->menu_id, 'returnUrl' => classic_uri_string()]),
                'label' => t('admin', 'Update')
            ]);?>

        </td>
        <td style="width: 1%; padding-left: 20px; padding-right: 20px; text-align: center;">

            <?= PHPTheme::widget('tableButtonDelete', [
                'url' => classic_url('admin/menu/delete', ['id' => $model->menu_id, 'returnUrl' => classic_uri_string()]),
                'label' => t('admin', 'Delete')
            ]);?>

        </td>
    </tr>

<?php endforeach;?>

</tbody>

<?php

echo admin_theme_view('_table/end');