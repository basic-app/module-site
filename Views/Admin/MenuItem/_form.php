<?php

echo PHPTheme::widget('formFieldText', [
    'name'  => 'item_name',
    'value' => $model->item_name,
    'label' => $model->fieldLabel('item_name'),
    'error' => array_key_exists('item_name', $errors) ? $errors['item_name'] : null
]);

echo PHPTheme::widget('formFieldText', [
    'name'  => 'item_url',
    'value' => $model->item_url,
    'label' => $model->fieldLabel('item_url'),
    'error' => array_key_exists('item_url', $errors) ? $errors['item_url'] : null
]);

echo PHPTheme::widget('formFieldText', [
    'name'  => 'item_sort',
    'value' => $model->item_sort,
    'label' => $model->fieldLabel('item_sort'),
    'error' => array_key_exists('item_sort', $errors) ? $errors['item_sort'] : null
]);

echo PHPTheme::widget('formErrors', ['errors' => $errors]);

echo PHPTheme::widget('formButton', ['type' => 'submit', 'label' => $model->admin_id ? t('admin', 'Update') : t('admin', 'Insert')]);