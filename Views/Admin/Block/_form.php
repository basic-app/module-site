<?php

use BasicApp\Helpers\Url;

$adminTheme = service('adminTheme');

$form = $adminTheme->createForm(['model' => $model, 'errors' => $errors]);

$url = Url::currentUrl();

echo $form->formOpen($url);

echo $form->input('block_uid');

echo $form->codeTextarea('block_content');

echo $form->renderErrors();

$label = $model->getPrimaryKey() ? t('admin', 'Update') : t('admin', 'Insert');

echo $form->submit($label);

echo $form->formClose();