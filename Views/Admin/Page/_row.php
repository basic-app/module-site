<?php

use CodeIgniter\Events\Events;

$event = new StdClass;

$event->columns = [
    ['preset' => 'id small', 'value' => $model->page_id],
    ['preset' => 'medium', 'value' => $model->item_created_at],
    ['preset' => 'small', 'value' => $model->page_uid],
    ['preset' => 'primary', 'value' => $model->page_name],
    ['preset' => 'large', 'value' => $model->formattedPublished]
];

Events::trigger('admin_page_table_row', $event);

$event->columns[] = [
    'content' => PHPTheme::widget('tableButtonUpdate', [
        'url' => classic_url('admin/page/update', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => PHPTheme::widget('tableButtonDelete', [
        'url' => classic_url('admin/page/delete', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

echo PHPTheme::widget('tableRow', ['columns' => $event->columns]);