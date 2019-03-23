<?php

echo admin_theme_widget('formFieldText', [
    'name'  => 'menu_name',
    'value' => $model->menu_name,
    'label' => $model->fieldLabel('menu_name'),
    'error' => array_key_exists('menu_name', $errors) ? $errors['menu_name'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name' => 'menu_uid',
    'value' => $model->menu_uid,
    'label' => $model->fieldLabel('menu_uid'),
    'error' => array_key_exists('menu_uid', $errors) ? $errors['menu_uid'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'menu_default_item_icon',
    'value' => $model->menu_default_item_icon,
    'label' => $model->fieldLabel('menu_default_item_icon'),
    'error' => array_key_exists('menu_default_item_icon', $errors) ? $errors['menu_default_item_icon'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'menu_default_item_class',
    'value' => $model->menu_default_item_class,
    'label' => $model->fieldLabel('menu_default_item_class'),
    'error' => array_key_exists('menu_default_item_class', $errors) ? $errors['menu_default_item_class'] : null
]);

echo admin_theme_widget('formFieldText', [
    'name'  => 'menu_default_item_link_class',
    'value' => $model->menu_default_item_link_class,
    'label' => $model->fieldLabel('menu_default_item_link_class'),
    'error' => array_key_exists('menu_default_item_link_class', $errors) ? $errors['menu_default_item_link_class'] : null
]);

echo admin_theme_widget('formErrors', ['errors' => $errors]);

echo admin_theme_widget('formButton', ['type' => 'submit', 'label' => $model->menu_id ? t('admin', 'Update') : t('admin', 'Insert')]);