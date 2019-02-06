<?php

echo PHPTheme::widget('formFieldText', [
    'name'  => 'page_name',
    'value' => $model->page_name,
    'label' => $model->fieldLabel('page_name'),
    'error' => array_key_exists('page_name', $errors) ? $errors['page_name'] : null
]);

echo PHPTheme::widget('formFieldText', [
    'name'  => 'page_url',
    'value' => $model->page_url,
    'label' => $model->fieldLabel('page_url'),
    'error' => array_key_exists('page_url', $errors) ? $errors['page_url'] : null
]);

echo PHPTheme::widget('formFieldTextarea', [
    'preset' => 'editor',
    'name'   => 'page_text',
    'value'  => $model->page_text,
    'label'  => $model->fieldLabel('page_text'),
    'error'  => array_key_exists('page_text', $errors) ? $errors['page_text'] : null
]);

echo PHPTheme::widget('formFieldCheckbox', [
    'name'  => 'page_published',
    'value' => $model->page_published,
    'label' => $model->fieldLabel('page_published'),
    'error' => array_key_exists('page_published', $errors) ? $errors['page_published'] : null
]);

echo PHPTheme::widget('formErrors', ['errors' => $errors]);

echo PHPTheme::widget('formButton', ['type' => 'submit', 'label' => $model->page_id ? t('admin', 'Update') : t('admin', 'Insert')]);