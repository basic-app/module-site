<?php

require __DIR__ . '/_common.php';

$this->data['breadcrumbs'][] = ['label' => t('admin', 'Update')];

?>
<form method="POST">

	<?= PHPTheme::widget('card', [
		'header' => $this->data['title'],
		'content' => app_view('BasicApp\Site\Admin\MenuItem\_form', [
			'model' => $model,
			'errors' => $errors
		])
	]);?>

</form>