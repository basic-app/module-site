<?php

use BasicApp\Site\Models\MenuItem;

use App\Html\FormErrors;
use App\Html\FormSubmitButton;
use App\Html\FormInput;

echo FormInput::factory([
	'label' => $model->fieldLabel('item_name'), 
	'name' => 'item_name',
	'errors' => $errors
])->render($model->item_name);

echo FormInput::factory([
	'label' => $model->fieldLabel('item_url'), 
	'name' => 'item_url', 
	'errors' => $errors
])->render($model->item_url);

echo FormInput::factory([
	'label' => $model->fieldLabel('item_sort'), 
	'name' => 'item_sort', 
	'errors' => $errors
])->render($model->item_sort);

echo FormErrors::factory()->render($errors);

echo FormSubmitButton::factory()->render($model->item_id ? t('admin', 'Update') : t('admin', 'Create'));