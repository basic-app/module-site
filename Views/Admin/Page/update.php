<?php

require __DIR__ . '/_common.php';

$this->data['breadcrumbs'][] = ['label' => t('admin', 'Update')];

?>
<form method="POST" id="admin-page-update-form">

	<?php echo admin_theme_view('_widgets/card', [
		'header' => $title,
		'content' => admin_theme_view('BasicApp\Site\Views\Admin\Page\_form', [
			'model' => $model,
			'errors' => $errors
		])
	]);?>

</form>