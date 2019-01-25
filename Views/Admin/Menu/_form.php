<?php

use BasicApp\Site\Models\Menu;

use App\Html\FormErrors;
use App\Html\FormSubmitButton;
use App\Html\FormInput;

echo FormInput::factory([
	'label' => Menu::fieldLabel('menu_name'), 
	'name' => 'menu_name',
	'errors' => $errors
])->render($model->menu_name);

echo FormInput::factory([
	'label' => Menu::fieldLabel('menu_uid'), 
	'name' => 'menu_uid', 
	'errors' => $errors
])->render($model->menu_uid);

echo FormErrors::factory()->render($errors);

echo FormSubmitButton::factory()->render($model->menu_id ? t('admin', 'Update') : t('admin', 'Create'));