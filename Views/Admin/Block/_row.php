<?php

use CodeIgniter\Events\Events;

$event = new StdClass;

$event->columns = [
    ['preset' => 'id small', 'content' => $model->block_id],
    ['preset' => 'medium date', 'content' => $model->block_created_at],
    ['preset' => 'primary', 'content' => $model->block_uid]
];

Events::trigger('admin_block_table_row', $event);

$event->columns[] = [
    'content' => PHPTheme::widget('tableButtonUpdate', [
        'url' => classic_url('admin/block/update', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => PHPTheme::widget('tableButtonDelete', [
        'url' => classic_url('admin/block/delete', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

echo PHPTheme::widget('tableRow', ['columns' => $event->columns]);