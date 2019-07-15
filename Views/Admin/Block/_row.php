<?php

use CodeIgniter\Events\Events;
use BasicApp\Helpers\Url;

$event = new StdClass;

$event->columns = [
    ['preset' => 'id small', 'content' => $model->block_id],
    ['preset' => 'medium date', 'content' => $model->block_created_at],
    ['preset' => 'primary', 'content' => $model->block_uid]
];

Events::trigger('admin_block_table_row', $event);

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonUpdate', [
        'url' => Url::returnUrl('admin/block/update', [
            'id' => $model->getPrimaryKey()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonDelete', [
        'url' => Url::returnUrl('admin/block/delete', [
            'id' => $model->getPrimaryKey()
        ])
    ]), 
    'preset' => 'button'
];

echo admin_theme_widget('tableRow', ['columns' => $event->columns]);