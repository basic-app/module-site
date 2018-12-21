<?php

require __DIR__ . '/_common.php';

$adminConfig->breadcrumbs[] = ['label' => ['admin', 'Update']];

?>
<form method="POST">

	<?php echo admin_theme_view('_widgets/card', [
//		'header' => $title,
		'content' => admin_theme_view('BasicApp\Site\Views\Admin\Menu\_form', [
			'model' => $model,
			'errors' => $errors
		])
	]);?>

</form>