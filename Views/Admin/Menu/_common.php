<?php

$adminConfig = config(Config\Custom\Admin::class);

$adminConfig->mainMenu['menu']['active'] = true;

$adminConfig->breadcrumbs[] = ['label' => t('admin.menu', 'Menu'), 'url' => ['/admin/menu']];

$this->data['title'] = t('admin.menu', 'Menu');