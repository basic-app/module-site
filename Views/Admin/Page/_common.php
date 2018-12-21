<?php

$title = t('admin', 'Pages');

$adminConfig = config(Config\Custom\Admin::class);

$adminConfig->mainMenu['pages']['active'] = true;

$adminConfig->breadcrumbs[] = ['label' => $title, 'url' => site_url('admin/page')];

$this->data['title'] = $title;