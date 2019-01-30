<?php

$title = t('admin.menu', 'Blocks');

$this->data['mainMenu']['blocks']['active'] = true;

$this->data['breadcrumbs'][] = ['label' => $title, 'url' => ['/admin/block']];

$this->data['title'] = $title;
