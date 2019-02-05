<?php

echo PHPTheme::widget('formFieldText', [
    'name'  => 'menu_name',
    'value' => $model->menu_name,
    'label' => $model->fieldLabel('menu_name'),
    'error' => array_key_exists('menu_name', $errors) ? $errors['menu_name'] : null
]);

echo PHPTheme::widget('formFieldText', [
    'name' => 'menu_uid',
    'value' => $model->menu_uid,
    'label' => $model->fieldLabel('menu_uid'),
    'error' => array_key_exists('menu_uid', $errors) ? $errors['menu_uid'] : null
]);

echo PHPTheme::widget('formErrors', ['errors' => $errors]);

echo PHPTheme::widget('formButton', ['type' => 'submit', 'label' => $model->admin_id ? t('admin', 'Update') : t('admin', 'Insert')]);