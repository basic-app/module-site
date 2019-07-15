<?php

use CodeIgniter\Events\Events;
use BasicApp\Helpers\Url;

$event = new StdClass;

$event->columns = [
    ['preset' => 'id small', 'content' => $model->menu_id],
    ['preset' => 'medium', 'content' => $model->menu_created_at],
    ['preset' => 'small', 'content' => $model->menu_uid],
    ['preset' => 'primary', 'content' => $model->menu_name],
    [
        'type' => 'link', 
        'label' => t('admin.menu', 'Items'), 
        'url' => Url::createUrl('admin/menu-item', [
            'item_menu_id' => $model->getPrimaryKey()
        ])
    ]
];

Events::trigger('admin_menu_table_row', $event);

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonUpdate', [
        'url' => Url::returnUrl('admin/menu/update', [
            'id' => $model->getPrimaryKey()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonDelete', [
        'url' => Url::returnUrl('admin/menu/delete', [
            'id' => $model->getPrimaryKey()
        ])
    ]), 
    'preset' => 'button'
];

echo admin_theme_widget('tableRow', ['columns' => $event->columns]);