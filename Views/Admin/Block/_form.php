<?php

echo PHPTheme::widget('formFieldText', [
    'name' => 'block_uid',
    'value' => $model->block_uid,
    'label' => $model->fieldLabel('block_uid'),
    'errors' => array_key_exists('block_uid', $errors) ? $errors['block_uid'] : null
]);

echo PHPTheme::widget('formFieldTextarea', [
    'preset' => 'code',
    'name' => 'block_content',
    'value' => $model->block_content,
    'label' => $model->fieldLabel('block_content'),
    'error' => array_key_exists('block_content', $errors) ? $errors['block_content'] : null
]);

echo PHPTheme::widget('formErrors', ['errors' => $errors]);

echo PHPTheme::widget('formButton', ['type' => 'submit', 'label' => $model->block_id ? t('admin', 'Update') : t('admin', 'Insert')]);