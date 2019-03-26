<?php

echo admin_theme_widget('formFieldText', [
    'name'  => 'page_name',
    'value' => $model->page_name,
    'label' => $model->label('page_name'),
    'error' => array_key_exists('page_name', $errors) ? $errors['page_name'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'page_url',
    'value' => $model->page_url,
    'label' => $model->label('page_url'),
    'error' => array_key_exists('page_url', $errors) ? $errors['page_url'] : null
]);

echo admin_theme_widget('formFieldTextarea', [
    'preset' => 'editor',
    'name'   => 'page_text',
    'value'  => $model->page_text,
    'label'  => $model->label('page_text'),
    'error'  => array_key_exists('page_text', $errors) ? $errors['page_text'] : null
]);

echo admin_theme_widget('formFieldCheckbox', [
    'name'  => 'page_published',
    'value' => $model->page_published,
    'label' => $model->label('page_published'),
    'error' => array_key_exists('page_published', $errors) ? $errors['page_published'] : null
]);

echo admin_theme_widget('formErrors', ['errors' => $errors]);

echo admin_theme_widget('formButton', ['type' => 'submit', 'label' => $model->page_id ? t('admin', 'Update') : t('admin', 'Insert')]);