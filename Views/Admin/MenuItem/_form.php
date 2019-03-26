<?php

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_name',
    'value' => $model->item_name,
    'label' => $model->label('item_name'),
    'error' => array_key_exists('item_name', $errors) ? $errors['item_name'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_url',
    'value' => $model->item_url,
    'label' => $model->label('item_url'),
    'error' => array_key_exists('item_url', $errors) ? $errors['item_url'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_uid',
    'value' => $model->item_uid,
    'label' => $model->label('item_uid'),
    'error' => array_key_exists('item_uid', $errors) ? $errors['item_uid'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_sort',
    'value' => $model->item_sort,
    'label' => $model->label('item_sort'),
    'error' => array_key_exists('item_sort', $errors) ? $errors['item_sort'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_class',
    'value' => $model->item_class,
    'label' => $model->label('item_class'),
    'error' => array_key_exists('item_class', $errors) ? $errors['item_class'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_link_class',
    'value' => $model->item_link_class,
    'label' => $model->label('item_link_class'),
    'error' => array_key_exists('item_link_class', $errors) ? $errors['item_link_class'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_icon',
    'value' => $model->item_icon,
    'label' => $model->label('item_icon'),
    'error' => array_key_exists('item_icon', $errors) ? $errors['item_icon'] : null
]);

echo admin_theme_widget('formFieldCheckbox', [
    'name'  => 'item_enabled',
    'value' => $model->item_enabled,
    'label' => $model->label('item_enabled'),
    'error' => array_key_exists('item_enabled', $errors) ? $errors['item_enabled'] : null
]);

echo admin_theme_widget('formErrors', ['errors' => $errors]);

echo admin_theme_widget('formButton', ['type' => 'submit', 'label' => $model->item_id ? t('admin', 'Update') : t('admin', 'Insert')]);