<?php

use CodeIgniter\Events\Events;

$event = new StdClass;

$event->columns = [
    ['preset' => 'id small', 'content' => $model->page_id],
    ['preset' => 'medium', 'content' => $model->page_created_at],
    ['preset' => 'small', 'content' => $model->page_url],
    ['preset' => 'primary', 'content' => $model->page_name],
    ['preset' => 'large', 'content' => $model->formattedPublished]
];

Events::trigger('admin_page_table_row', $event);

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonUpdate', [
        'url' => classic_url('admin/page/update', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonDelete', [
        'url' => classic_url('admin/page/delete', [
            'id' => $model->getPrimaryKey(), 
            'returnUrl' => classic_uri_string()
        ])
    ]), 
    'preset' => 'button'
];

echo admin_theme_widget('tableRow', ['columns' => $event->columns]);