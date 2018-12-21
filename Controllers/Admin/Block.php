<?php

namespace BasicApp\Site\Controllers\Admin;

class Block extends \App\Crud\AdminCrudController
{

	protected $modelClass = \BasicApp\Site\Models\Block::class;

	protected $viewPath = 'Modules\Site\Views\Admin\Block';

	protected $returnUrl = 'admin/block';

}
