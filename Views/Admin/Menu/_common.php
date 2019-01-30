<?php

$this->data['title'] = t('admin.menu', 'Menu');

$this->data['mainMenu']['menu']['active'] = true;

$this->data['breadcrumbs'][] = ['label' => $this->data['title'], 'url' => ['/admin/menu']];
