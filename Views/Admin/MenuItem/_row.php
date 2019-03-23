<?php

use CodeIgniter\Events\Events;

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
        'url' => classic_url('admin/menu-item/update', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonDelete', [
        'url' => classic_url('admin/menu-item/delete', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

echo admin_theme_widget('tableRow', ['columns' => $event->columns]);