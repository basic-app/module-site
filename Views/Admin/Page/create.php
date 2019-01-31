<?php

require __DIR__ . '/_common.php';

$this->data['breadcrumbs'][] = ['label' => t('admin', 'Create')];

?>
<form method="POST" id="admin-page-create-form">

	<?= PHPTheme::widget('card', [
		'header' => $this->data['title'],
		'content' => app_view('BasicApp\Site\Admin\Page\_form', [
			'model' => $model,
			'errors' => $errors
		])
	]);?>

</form>