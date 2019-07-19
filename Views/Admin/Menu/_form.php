<?php

use BasicApp\Helpers\Url;

$adminTheme = service('adminTheme');

$form = $adminTheme->createForm(['model' => $model, 'errors' => $errors]);

$url = Url::currentUrl();

echo $form->formOpen($url);

echo $form->input('menu_name');

echo $form->input('menu_uid');

echo $form->input('menu_default_item_icon');

echo $form->input('menu_default_item_class');

echo $form->input('menu_default_item_link_class');

echo $form->renderErrors();

$label = $model->getPrimaryKey() ? t('admin', 'Update') : t('admin', 'Insert');

echo $form->submit($label);

echo $form->formClose();