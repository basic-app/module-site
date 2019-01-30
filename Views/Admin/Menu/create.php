<?php

require __DIR__ . '/_common.php';

$this->data['breadcrumbs'][] = ['label' => ['admin', 'Create']];

?>
<form method="POST">

	<?= PHPTheme::widget('card', [
		'header' => $this->data['title'],
		'content' => app_view('BasicApp\Site\Views\Admin\Menu\_form', [
			'model' => $model,
			'errors' => $errors
		])
	]);?>

</form>