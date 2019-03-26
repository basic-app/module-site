<?php

echo admin_theme_widget('formFieldText', [
    'name' => 'block_uid',
    'value' => $model->block_uid,
    'label' => $model->label('block_uid'),
    'errors' => array_key_exists('block_uid', $errors) ? $errors['block_uid'] : null
]);

echo admin_theme_widget('formFieldTextarea', [
    'preset' => 'code',
    'name' => 'block_content',
    'value' => $model->block_content,
    'label' => $model->label('block_content'),
    'error' => array_key_exists('block_content', $errors) ? $errors['block_content'] : null
]);

echo admin_theme_widget('formErrors', ['errors' => $errors]);

echo admin_theme_widget('formButton', ['type' => 'submit', 'label' => $model->block_id ? t('admin', 'Update') : t('admin', 'Insert')]);