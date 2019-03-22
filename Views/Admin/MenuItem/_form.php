<?php

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_name',
    'value' => $model->item_name,
    'label' => $model->fieldLabel('item_name'),
    'error' => array_key_exists('item_name', $errors) ? $errors['item_name'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_url',
    'value' => $model->item_url,
    'label' => $model->fieldLabel('item_url'),
    'error' => array_key_exists('item_url', $errors) ? $errors['item_url'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_sort',
    'value' => $model->item_sort,
    'label' => $model->fieldLabel('item_sort'),
    'error' => array_key_exists('item_sort', $errors) ? $errors['item_sort'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_link_html_class',
    'value' => $model->item_link_html_class,
    'label' => $model->fieldLabel('item_link_html_class'),
    'error' => array_key_exists('item_link_html_class', $errors) ? $errors['item_link_html_class'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'item_icon_html_class',
    'value' => $model->item_icon_html_class,
    'label' => $model->fieldLabel('item_icon_html_class'),
    'error' => array_key_exists('item_icon_html_class', $errors) ? $errors['item_icon_html_class'] : null
]);

echo admin_theme_widget('formErrors', ['errors' => $errors]);

echo admin_theme_widget('formButton', ['type' => 'submit', 'label' => $model->item_id ? t('admin', 'Update') : t('admin', 'Insert')]);