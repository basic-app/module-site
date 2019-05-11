<?php

use CodeIgniter\Events\Events;

$event = new StdClass;

$event->columns = [
    ['preset' => 'id small', 'content' => $model->menu_id],
    ['preset' => 'medium', 'content' => $model->menu_created_at],
    ['preset' => 'small', 'content' => $model->menu_uid],
    ['preset' => 'primary', 'content' => $model->menu_name],
    [
        'type' => 'link', 
        'label' => t('admin.menu', 'Items'), 
        'url' => classic_url('admin/menu-item', [
            'item_menu_id' => $model->getPrimaryKey()
        ])
    ]
];

Events::trigger('admin_menu_table_row', $event);

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonUpdate', [
        'url' => classic_url('admin/menu/update', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonDelete', [
        'url' => classic_url('admin/menu/delete', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

echo admin_theme_widget('tableRow', ['columns' => $event->columns]);