<?php

$adminTheme = service('adminTheme');

$form = $adminTheme->createForm($model, $errors);

echo $form->open();

echo $form->inputGroup($data, 'page_name');

echo $form->inputGroup($data, 'page_url');

echo $form->editorTextareaGroup($data, 'page_text', ['rows' => 30]);

echo $form->checkboxGroup($data, 'page_published');

echo $form->renderErrors();

echo $form->beginButtons();

$label = $data->getPrimaryKey() ? t('admin', 'Update') : t('admin', 'Insert');

echo $form->submitButton($label);

echo $form->endButtons();

echo $form->close();