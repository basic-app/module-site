<?php

use BasicApp\Site\Models\Block;

use App\Html\FormErrors;
use App\Html\FormSubmitButton;
use App\Html\FormInput;
use App\Html\FormTextareaCode;

echo FormInput::factory([
	'label' => $model->fieldLabel('block_uid'), 
	'name' => 'block_uid',
	'errors' => $errors
])->render($model->block_uid);

echo FormTextareaCode::factory([
	'label' => $model->fieldLabel('block_content'), 
	'name' => 'block_content',
	'errors' => $errors
])->render($model->block_content);

echo FormErrors::factory()->render($errors);

echo FormSubmitButton::factory()->render($model->block_id ? t('admin', 'Update') : t('admin', 'Create'));
