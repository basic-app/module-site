<?php

use Modules\Site\Models\Page;

use App\Html\FormErrors;
use App\Html\FormSubmitButton;
use App\Html\FormInput;
use App\Html\FormTextareaEditor;
use App\Html\FormCheckbox;

echo FormInput::factory([
	'label' => Page::fieldLabel('page_name'), 
	'name' => 'page_name',
	'errors' => $errors
])->render($model->page_name);

echo FormInput::factory([
	'label' => Page::fieldLabel('page_url'), 
	'name' => 'page_url',
	'errors' => $errors
])->render($model->page_url);

echo FormTextareaEditor::factory([
	'label' => Page::fieldLabel('page_text'), 
	'name' => 'page_text',
	'errors' => $errors
])->render($model->page_text);

echo FormCheckbox::factory([
	'label' => Page::fieldLabel('page_published'), 
	'name' => 'page_published',
	'errors' => $errors
])->render($model->page_published);

echo FormErrors::factory()->render($errors);

echo FormSubmitButton::factory()->render($model->page_id ? t('admin', 'Update') : t('admin', 'Create'));
