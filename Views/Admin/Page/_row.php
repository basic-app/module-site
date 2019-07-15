<?php

use CodeIgniter\Events\Events;
use BasicApp\Helpers\Url;

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
        'url' => Url::returnUrl('admin/page/update', [
            'id' => $model->getPrimaryKey()
        ])
    ]), 
    'preset' => 'button'
];

$event->columns[] = [
    'content' => admin_theme_widget('tableButtonDelete', [
        'url' => Url::returnUrl('admin/page/delete', [
            'id' => $model->getPrimaryKey()
        ])
    ]), 
    'preset' => 'button'
];

echo admin_theme_widget('tableRow', ['columns' => $event->columns]);