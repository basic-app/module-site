<?php

require __DIR__ . '/_common.php';

$this->data['breadcrumbs'][] = ['label' => ['admin', 'Update']];

?>
<form method="POST" id="admin-block-update-form">

	<?php echo admin_theme_view('_widgets/card', [
		'header' => $this->data['title'],
		'content' => admin_theme_view('BasicApp\Site\Views\Admin\Block\_form', [
			'model' => $model,
			'errors' => $errors
		])
	]);?>

</form>