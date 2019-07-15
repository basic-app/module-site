<?php

use CodeIgniter\Events\Events;
use BasicApp\Helpers\Url;

$event = new StdClass;

$event->columns = [
    ['preset' => 'id small', 'content' => $model->item_id],
    ['preset' => 'medium', 'content' => $model->item_created_at],
    ['preset' => 'small', 'content' => $model->item_url],
    ['preset' => 'primary', 'content' => $model->item_name],
    ['preset' => 'small', 'content' => $model->item_sort],
    ['content' => $model->item_enabled ? t('admin', 'Enabled') : t('admin', 'Disabled')]
];

Events::trigger('admin_menu_item_table_row', $event);

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonUpdate', [
        'url' => Url::returnUrl('admin/menu-item/update', [
            'id' => $model->getPrimaryKey()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonDelete', [
        'url' => Url::returnUrl('admin/menu-item/delete', [
            'id' => $model->getPrimaryKey()
        ])
    ]), 
    'preset' => 'button'
];

echo admin_theme_widget('tableRow', ['columns' => $event->columns]);