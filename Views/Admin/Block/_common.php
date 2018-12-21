<?php

$title = t('admin.menu', 'Blocks');

$adminConfig = config(Config\Custom\Admin::class);

$adminConfig->mainMenu['blocks']['active'] = true;

$adminConfig->breadcrumbs[] = ['label' => $title, 'url' => ['/admin/block']];

$this->data['title'] = $title;