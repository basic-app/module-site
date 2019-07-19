<?php

use BasicApp\Helpers\Url;

$adminTheme = service('adminTheme');

$form = $adminTheme->createForm(['model' => $model, 'errors' => $errors]);

$url = Url::currentUrl();

echo $form->formOpen($url);

echo $form->input('page_name');

echo $form->input('page_url');

echo $form->editorTextarea('page_text');

echo $form->checkbox('page_published');

echo $form->renderErrors();

$label = $model->getPrimaryKey() ? t('admin', 'Update') : t('admin', 'Insert');

echo $form->submit($label);

echo $form->formClose();