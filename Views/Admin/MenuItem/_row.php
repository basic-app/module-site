<?php

use CodeIgniter\Events\Events;

$event = new StdClass;

$event->columns = [
    ['preset' => 'id small', 'value' => $model->item_id],
    ['preset' => 'medium', 'value' => $model->item_created_at],
    ['preset' => 'small', 'value' => $model->item_url],
    ['preset' => 'primary', 'value' => $model->item_name],
    ['preset' => 'small', 'value' => $model->item_sort]
];

Events::trigger('admin_menu_item_table_row', $event);

$event->columns[] = [
    'content' => PHPTheme::widget('tableButtonUpdate', [
        'url' => classic_url('admin/menu-item/update', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => PHPTheme::widget('tableButtonDelete', [
        'url' => classic_url('admin/menu-item/delete', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

echo PHPTheme::widget('tableRow', ['columns' => $event->columns]);