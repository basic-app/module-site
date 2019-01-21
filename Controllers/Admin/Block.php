<?php

namespace BasicApp\Site\Controllers\Admin;

class Block extends \BasicApp\AdminCrudController
{

	protected $modelClass = \BasicApp\Site\Models\Block::class;

	protected $viewPath = 'BasicApp\Site\Views\Admin\Block';

	protected $returnUrl = 'admin/block';

}
