<?php

require __DIR__ . '/_common.php';

$this->data['breadcrumbs'][] = ['label' => t('admin', 'Update')];

?>
<form method="POST" id="admin-block-update-form">

	<?= PHPTheme::widget('card', [
		'header' => $this->data['title'],
		'content' => app_view('BasicApp\Site\Admin\Block\_form', [
			'model' => $model,
			'errors' => $errors
		])
	]);?>

</form>