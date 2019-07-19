<?php

use BasicApp\Helpers\Url;

$adminTheme = service('adminTheme');

$form = $adminTheme->createForm(['model' => $model, 'errors' => $errors]);

$url = Url::currentUrl();

echo $form->formOpen($url);

echo $form->input('item_name');

echo $form->input('item_url');

echo $form->input('item_uid');

echo $form->input('item_sort');

echo $form->input('item_class');

echo $form->input('item_link_class');

echo $form->input('item_icon');

echo $form->checkbox('item_enabled');

echo $form->renderErrors();

$label = $model->getPrimaryKey() ? t('admin', 'Update') : t('admin', 'Insert');

echo $form->submit($label);

echo $form->formClose();